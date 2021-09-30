<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisterUserController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function(){
    //register
    Route::view('/register', 'register')->name('register');
    Route::post('/register', RegisterUserController::class)->name('register.store');

    //login
    Route::post('/login', [AuthController::class, 'store'])->name('login.store');
    Route::view('/login', 'login')->name('login');
    //return view for first step of retriving password
    Route::view('/password-reset', 'password-reset')->name('password.reset');
    //sends an email with link to second step
    Route::post('/password-reset', [PasswordResetLinkController::class, 'store'])->name('password.email');
    //return view of second step - setting new password
    Route::get('/password-reset/{token}', function ($token) {
        return view('password-update', ['token' => $token]);
    });
    //updating new password 
    Route::put('/new-password', [PasswordResetLinkController::class, 'update'])->name('password.update');
});

Route::post('/logout', [AuthController::class, 'destroy'])->name('logout')->middleware('auth');
