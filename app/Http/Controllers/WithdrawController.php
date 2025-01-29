<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\Withdraw;
use App\Models\Order;
use App\Models\UpgradePackage;
use Auth;
use Illuminate\Support\Str;


class WithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $withdraws = Withdraw::where('user_id',$user->id)->get();
        return view('user.withdraw_view', [
            'withdraws' => $withdraws,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.withdraw_create', [
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'withdraw_amount' => ['required', 'integer'],
            'bank_name' => 'required',
            'account_number' => 'required',
            'account_title' => 'required'
        ]);

        $randomNumber = rand(10000000, 99999999); // Random number between 1000 and 9999

        $user = Auth::user();

        $account_balance = Auth::user()->total_balance();
        $upgrade = $user->upgrade_packages()->latest()->first();

        if($request->withdraw_amount <= $account_balance)
        {
            if(empty($upgrade) == False)
            {
                if($upgrade->status == 0)
                {
                    Withdraw::insert([
                        'withdraw_amount' => $request->withdraw_amount,
                        'withdraw_date' => $request->deposit_date,
                        'withdraw_date' => now(),
                        'transaction_id' => $randomNumber,
                        'bank' => $request->bank_name,
                        'account_number' => $request->account_number,
                        'account_title' => $request->account_title,
                        'user_id' => $user->id,
                    ]);

                    return redirect('withdraw')->with('success', 'Withdraw successfully!');
                }else{

                     return redirect('withdraw')->with(['error' => 'You have to complete your level.']);
                }
            }else{

                return redirect('withdraw')->with(['error' => 'You have to upgrade package first.']);

            }
        }else{

             return redirect('withdraw')->with(['error' => 'Insufficient balance for withdraw.']);
        }
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
}
