<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\UpgradePackage;
use App\Models\ActivePackage;
use Illuminate\Support\Facades\DB;
use Auth;

class TaskController extends Controller
{
    public function tasks()
    {
        return view('user.tasks', [
            'packages' => Packages::get(),
        ]);
    }

    public function task_detail($id)
    {
        return view('user.task_detail', [
            'package' => Packages::where('id',$id)->first(),
        ]);
    }

    public function upgrade_task($id)
    {
        $account_balance = Auth::user()->total_balance();
        $package = Packages::where('id',$id)->first();
        $user = Auth::user();
        $upgrade = $user->upgrade_packages()->latest()->first();

        if($account_balance >= $package->minimum_amount)
        {
            if(empty($upgrade) == True || $upgrade->status == 0 && $upgrade->package_id +1 == $id)
            {

            // Start transaction
            DB::beginTransaction();

            try {
                // First deactivate any existing active packages for this user
                UpgradePackage::where('user_id', $user->id)
                    ->where('status', 1)
                    ->update(['status' => 0]);
                
                // Delete any existing active package records
                ActivePackage::where('user_id', $user->id)->delete();

                // Create the upgrade package
                $upgrade_package = UpgradePackage::create([
                    'package_id' => $id,
                    'user_id' => $user->id,
                    'amount' => $package->minimum_amount,
                    'number_of_tasks' => $package->number_of_tasks,
                    'remaining_tasks' => $package->number_of_tasks,
                    'status' => 1
                ]);

                // Create new active package record
                ActivePackage::create([
                    'user_id' => $user->id,
                    'upgrade_package_id' => $upgrade_package->id
                ]);

                DB::commit();
                
                return redirect()->back()->with(['success' => 'Congratulations Package Purchased now you can deliver orders']);
            } catch (\Exception $e) {
                DB::rollBack();
                \Log::error('Package upgrade failed: ' . $e->getMessage());
                return redirect()->back()->with(['failed' => 'Failed to purchase package. Please try again.']);
            }
        }
        else
        {

            return redirect()->back()->with(['failed' => 'You have to complete previous level for upgrade next level']);
        }
    }
        else {
            return redirect()->back()->with(['failed' => 'You do not have sufficient balance please recharge']);
        }

    }
}
