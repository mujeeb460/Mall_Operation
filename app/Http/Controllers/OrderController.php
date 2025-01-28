<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Order;
use App\Models\ActivePackage;
use App\Models\UpgradePackage;
use App\Models\Deposit;
use App\Models\Bonus; 
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        
        // Get the active package with remaining tasks
        $upgraded_package = $user->upgrade_packages()
            ->where('status', 1)
            ->where('remaining_tasks', '>', 0)
            ->orderBy('created_at', 'desc')
            ->first();


        if($upgraded_package)
        {
            $orderNumber = $user->orders()->where('package_id',$upgraded_package->package_id)->count();
        }else{
            $orderNumber = 0;
        }
        // Get orders only for the current active package
        $orders = collect();
        if ($upgraded_package && $upgraded_package->package) {
            $orders = Order::where('user_id', $user->id)
                ->where('package_id', $upgraded_package->package_id)
                ->orderBy('created_at', 'desc')
                ->get();
        }
        
        return view('user.orders', [
            'upgraded_package' => $upgraded_package,
            'orders' => $orders,
            'orderNumber' => $orderNumber
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Accept an order.
     */
    public function acceptOrder(Request $request)
    {
        Log::info('Received order request:', $request->all());

        try {
            $user = Auth::user();
            
            if (!$user) {
                Log::error('No authenticated user found');
                return redirect()->back()->with('error', 'User not authenticated');
            }

            // Calculate total balance from approved deposits
            $totalBalance = Deposit::where('user_id', $user->id)
                ->where('status', 1)
                ->sum('deposit_amount');

            // Check user's balance from deposits
            if ($totalBalance < 800) {
                Log::error('Insufficient balance for user:', ['user_id' => $user->id, 'balance' => $totalBalance]);
                return redirect()->back()->with('error', 'You need a minimum balance of 800 to accept orders. Your current balance is ' . $totalBalance);
            }

            // Get completed orders count for bonus calculation
            $completedOrdersCount = Order::where('user_id', $user->id)
                ->where('status', 'completed')
                ->count();

            // Get the active package with remaining tasks
            $upgraded_package = $user->upgrade_packages()
                ->where('status', 1)
                ->where('remaining_tasks', '>', 0)
                ->orderBy('created_at', 'desc')
                ->first();
            
            if (!$upgraded_package || !$upgraded_package->package) {
                Log::error('No active package found for user:', ['user_id' => $user->id]);
                return redirect()->back()->with('error', 'No active package found. Please upgrade to accept orders.');
            }

            // Check if user has remaining tasks
            if ($upgraded_package->remaining_tasks <= 0) {
                Log::error('No remaining tasks for user:', ['user_id' => $user->id]);
                return redirect()->back()->with('error', 'You have completed all tasks in your package. Please upgrade to accept more orders.');
            }

            // Check if this is the last task
            $isLastTask = ($upgraded_package->remaining_tasks == 1);

            // Start transaction
            DB::beginTransaction();

            try {
                // Check if there are remaining tasks
                if ($upgraded_package->remaining_tasks > 0) {
                    // Create new order record
                    $order = new Order();
                    $order->user_id = $user->id;
                    $order->package_id = $upgraded_package->package_id;
                    $order->order_number = $request->input('orderNumber');
                    $order->product_name = $request->input('product');
                    $order->quantity = $request->input('quantity');
                    $order->price = $request->input('price');
                    $order->commission = $request->input('commission');
                    $order->commission_rate = $upgraded_package->package->commission_rate;
                    $order->status = 'accepted';
                    
                    Log::info('Saving order:', $order->toArray());
                    $order->save();

                    // Add commission to bonus table
                    $bonus = new Bonus();
                    $bonus->package_id = $upgraded_package->package_id;
                    $bonus->order_id = $order->id;
                    $bonus->amount = $order->commission; // Use the commission as the bonus amount
                    $bonus->user_id = $user->id; // Set the user_id
                    $bonus->save();
                    Log::info('Bonus added:', [
                        'bonus_amount' => $order->commission,
                        'user_id' => $user->id,
                        'package_id' => $bonus->package_id,
                        'order_id' => $bonus->order_id,
                    ]);

                    // Update remaining tasks
                    $upgraded_package->remaining_tasks = $upgraded_package->remaining_tasks - 1;
                    
                    // If this was the last task, update package status
                    if ($upgraded_package->remaining_tasks == 0) {
                        $upgraded_package->status = 0; // Deactivate the package
                    }
                    
                    $upgraded_package->save();

                    DB::commit();

                    Log::info('Order saved successfully:', ['order_id' => $order->id]);

                    $message = $isLastTask ? 
                        'Order accepted successfully! This was your last task. Please upgrade to accept more orders.' : 
                        'Order accepted successfully!';

                    return redirect()->back()->with('success', $message);
                } else {
                    return redirect()->back()->with('error', 'No remaining tasks to accept this order.');
                }
            } catch (\Exception $e) {
                DB::rollBack();
                Log::error('Database error:', [
                    'message' => $e->getMessage(),
                    'trace' => $e->getTraceAsString()
                ]);
                throw $e;
            }
        } catch (\Exception $e) {
            Log::error('Order acceptance failed:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->back()->with('error', 'Failed to accept order: ' . $e->getMessage());
        }
    }


    public function orders_history()
    {
        $user = Auth::user();
        return view('user.orders_history', [
            'orders' => Order::where('user_id',$user->id)->where('status','accepted')->get(),
        ]);
        
    }


}
