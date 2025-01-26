<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Deposit;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)//: RedirectResponse
    {
        $request->validate([
            'reference_code' => ['required', 'max:255'],
            'phone' => ['required', 'max:255', 'unique:'.User::class],
            'password' => 'required|same:withdraw_password',
            'withdraw_password' => ['required'],
        ]);


        $user = User::create([
            'reference_code' => $request->reference_code,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'withdraw_password' => Hash::make($request->withdraw_password),
        ]);

        Deposit::insert([
            'deposit_amount' => 300,
            'deposit_date' => today(),
            'transaction_id' => 123,
            'bank' => 'Bonus',
            'user_id' => $user->id,
            'status' => 1
        ]);

        event(new Registered($user));

        Auth::login($user);

        session()->flash('congratulations', 'Congratulations on your successful registration!');
        
        return redirect(route('dashboard', absolute: false));
    }

    
}
