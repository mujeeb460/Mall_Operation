<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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
