<?php

use App\Http\Controllers\Auth\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::view('/register', 'register')->name('home');
Route::post('/register', RegisterUserController::class)->name('register.store');
