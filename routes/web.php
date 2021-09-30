<?php

use App\Http\Controllers\Auth\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require_once 'auth.php';

Route::get('/', function () {
    return view('index');
})->name('home');

Route::resource('/user', UserController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('can:admin')->name('admin.dashboard');