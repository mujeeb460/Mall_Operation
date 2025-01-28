<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Deposit;
use App\Models\Withdraw;
use Hash;

class AdminController extends Controller
{
    public function admin_login()
    {
        return view('admin.login', [
        ]);
    }

    public function admin_dashboard()
    {
        return view('admin.dashboard', [
        ]);
    }

    public function form_login(Request $request)
    {
        $credentials = $request->only('phone', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('admin_dashboard');
        }

        return redirect()->route('admin_login')->withErrors([
            'phone' => 'Invalid credentials',
        ]);
    }

    public function admin_logout(Request $request)
    {
        // Log out the admin
        Auth::guard('admin')->logout();

        // Optionally, you can invalidate the session if needed
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to the login page or admin dashboard
        return redirect()->route('admin_login');
    }

    public function get_users()
    {
    	$users = User::get();
        return view('admin.get_users', [
        	'users' => $users
        ]);
    }

    public function get_deposits()
    {
    	$deposits = Deposit::orderby('id','desc')->get();
        return view('admin.get_deposits', [
        	'deposits' => $deposits
        ]);
    }

    public function get_withdraws()
    {
    	$withdraws = Withdraw::orderby('id','desc')->get();
        return view('admin.get_withdraws', [
        	'withdraws' => $withdraws
        ]);
    }

    public function confirm_deposit($id)
    {
        $deposit = Deposit::where('id',$id)->first();

        if($deposit->status == 1)
        {
            return redirect()->route('get_deposits')->with(['message'=>'Deposit Already Approved.']);
        }elseif($deposit->status == 2)
        {
            return redirect()->route('get_deposits')->with(['message'=>'Deposit Already Rejected.']);
        }else{

            $deposit = Deposit::where('id',$id)->update(['status'=>1]);
            return redirect()->route('get_deposits')->with(['message'=>'Deposit Approved Successfully!']);
        }
        
    }

    public function reject_deposit($id)
    {
        $deposit = Deposit::where('id',$id)->first();

        if($deposit->status == 1)
        {
            return redirect()->route('get_deposits')->with(['message'=>'Deposit Already Approved.']);
        }elseif($deposit->status == 2)
        {
            return redirect()->route('get_deposits')->with(['message'=>'Deposit Already Rejected.']);
        }else{

            $deposit = Deposit::where('id',$id)->update(['status'=>2]);
            return redirect()->route('get_deposits')->with(['message'=>'Deposit Rejected Successfully!']);
        }

    }

    public function confirm_withdraw($id)
    {
        $withdraw = Withdraw::where('id',$id)->first();

        if($withdraw->status == 1)
        {
            return redirect()->route('get_withdraws')->with(['message'=>'Withdraw Already Approved.']);
        }elseif($withdraw->status == 2)
        {
            return redirect()->route('get_withdraws')->with(['message'=>'Withdraw Already Rejected.']);
        }else{

            $withdraw = Withdraw::where('id',$id)->update(['status'=>1]);
            return redirect()->route('get_withdraws')->with(['message'=>'Withdraw Approved Successfully!']);
        }
        
    }

    public function reject_withdraw($id)
    {
        $withdraw = Deposit::where('id',$id)->first();

        if($withdraw->status == 1)
        {
            return redirect()->route('get_withdraws')->with(['message'=>'Withdraw Already Approved.']);
        }elseif($withdraw->status == 2)
        {
            return redirect()->route('get_withdraws')->with(['message'=>'Withdraw Already Rejected.']);
        }else{

            $withdraw = Deposit::where('id',$id)->update(['status'=>2]);
            return redirect()->route('get_withdraws')->with(['message'=>'Withdraw Rejected Successfully!']);
        }

    }


     public function admin_help()
    {
        return view('admin.admin_help', [
        ]);
    }



}
