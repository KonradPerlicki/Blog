<?php

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\CommentController;
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
require_once 'admin.php';

//home
Route::view('/', 'index')->name('home');

//accessible for users
Route::resource('/user', UserController::class)->except(['index','store','create']);

//display post
Route::get('/post/{id}/{slug}',[PostController::class,'show'])->name('post.show');
Route::resource('/post', PostController::class)->except('show');

//comments
Route::resource('/comment', CommentController::class)->only(['store','destroy']);

