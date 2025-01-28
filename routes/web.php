<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProfileController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'showCongratulationsPopup' => session('congratulations', null),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/admin_login', [AdminController::class, 'admin_login'])->name('admin_login');
Route::post('form_login', [AdminController::class, 'form_login'])->name('form_login');

Route::middleware(['auth:admin'])->post('/admin/logout', [AdminController::class, 'admin_logout'])->name('admin.logout');



 Route::middleware('auth:admin')->group(function () {
    Route::get('admin_dashboard', [AdminController::class, 'admin_dashboard'])->name('admin_dashboard');
    Route::resource('admin_profile', AdminProfileController::class);

    Route::get('get_users', [AdminController::class, 'get_users'])->name('get_users');
    Route::get('get_deposits', [AdminController::class, 'get_deposits'])->name('get_deposits');
    Route::get('confirm_deposit/{id}', [AdminController::class, 'confirm_deposit'])->name('confirm_deposit');
    Route::get('reject_deposit/{id}', [AdminController::class, 'reject_deposit'])->name('reject_deposit');
    Route::get('get_withdraws', [AdminController::class, 'get_withdraws'])->name('get_withdraws');
    Route::get('confirm_withdraw/{id}', [AdminController::class, 'confirm_withdraw'])->name('confirm_withdraw');
    Route::get('reject_withdraw/{id}', [AdminController::class, 'reject_withdraw'])->name('reject_withdraw');

    Route::get('/admin_password', [AdminProfileController::class, 'admin_password'])->name('admin_password');
    Route::put('/update_admin_password', [AdminProfileController::class, 'update_admin_password'])->name('update_admin_password');

    Route::get('/admin_help', [App\Http\Controllers\AdminController::class, 'admin_help'])->name('admin_help');
    
    });


Route::middleware('auth')->group(function () {
    Route::get('/mine', [ProfileController::class, 'mine'])->name('mine');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/my-profile', [ProfileController::class, 'my_profile'])->name('my.profile');

    Route::get('/password', [ProfileController::class, 'password_view'])->name('password');
    Route::put('/update_password', [ProfileController::class, 'password_update'])->name('update_password');

});


Route::middleware('auth')->group(function () {

    Route::get('/tasks', [TaskController::class, 'tasks'])->name('tasks');
    Route::get('/task_detail/{id}', [TaskController::class, 'task_detail'])->name('task_detail');
    Route::get('/upgrade_task/{id}', [TaskController::class, 'upgrade_task'])->name('upgrade_task');

    Route::resource('orders', OrderController::class);

    Route::post('/accept-order', [App\Http\Controllers\OrderController::class, 'acceptOrder'])->name('accept.order');

    Route::get('/order-history', [App\Http\Controllers\OrderController::class, 'orders_history'])->name('history.order');

    Route::get('/help', [App\Http\Controllers\ProfileController::class, 'help'])->name('help');


    Route::resource('deposit', DepositController::class);
    Route::resource('withdraw', WithdrawController::class);



});


Route::get('/profile', function () {
    return view('company_profile');
})->name('profile');

Route::get('/description', function () {
    return view('rule_description');
})->name('description');

Route::get('/cooperation', function () {
    return view('agent_cooperation');
})->name('cooperation');

Route::get('/qualification', function () {
    return view('company_qualifications');
})->name('qualification');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');


require __DIR__.'/auth.php';
