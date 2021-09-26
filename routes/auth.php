<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterUserController;
use Illuminate\Support\Facades\Route;

//register
Route::view('/register', 'register')->name('register');
Route::post('/register', RegisterUserController::class)->name('register.store');

//login
Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
Route::post('/login', [AuthController::class, 'store'])->name('login.store');
Route::view('/login', 'login')->name('login');