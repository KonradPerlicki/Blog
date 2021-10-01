<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\PostController;
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

//admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard',[
        'user' => auth()->user()
    ]);
})->middleware('can:admin')->name('admin.dashboard');

Route::resource('/admin/user', UsersController::class, ['as'=>'admin']);
Route::resource('/admin/category', CategoryController::class, ['as'=>'admin']);
Route::resource('/admin/tag', TagController::class, ['as'=>'admin'])->only(['create','store','destroy']);


Route::resource('/post', PostController::class);

