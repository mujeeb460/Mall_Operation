<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\Deposit;
use Auth;
use Illuminate\Support\Str;




class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $deposits = Deposit::where('user_id',$user->id)->orderby('id','desc')->get();
        return view('user.deposit_view', [
            'deposits' => $deposits,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.deposit_create', [
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'deposit_amount' => ['required', 'integer'],
            'deposit_date' => ['required',],
            'bank_name' => 'required',
            'deposit_slip' => 'required|file|mimes:jpeg,png,pdf|max:2048',
        ]);


        $user = Auth::user();

        $randomNumber = rand(10000000, 99999999);

        $depositSlip = $request->file('deposit_slip');
    
        // Check if file is present
        if ($depositSlip) {
            // Store the file in the public directory
            $filePath = $depositSlip->store('deposit_slips', 'public'); // 'deposit_slips' folder in the public disk
            
            // You can optionally store the filename if you want to save just the name
            // $fileName = $depositSlip->getClientOriginalName();
        } else {
            $filePath = null; // Set to null if no file is uploaded
        }

        Deposit::insert([
            'deposit_amount' => $request->deposit_amount,
            'deposit_date' => $request->deposit_date,
            'bank' => $request->bank_name,
            'transaction_id' => $randomNumber,
            'deposit_slip' => $filePath,
            'user_id' => $user->id,

        ]);


        return redirect('deposit')->with('success', 'Deposit successfully!');

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
