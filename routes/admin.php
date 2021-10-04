<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware('can:admin')->group(function(){
    //home
    Route::view('admin/dashboard', 'admin.dashboard',['user'=>auth()->user()])->name('admin.dashboard');

    Route::resource('/admin/user', UsersController::class, ['as'=>'admin'])->only(['index','update']);
    Route::resource('/admin/category', CategoryController::class, ['as'=>'admin'])->only(['create','store','destroy']);
    Route::resource('/admin/tag', TagController::class, ['as'=>'admin'])->only(['create','store','destroy']);
    
    Route::get('/admin/posts',[PostController::class,'adminIndex'])->name('admin.post.index');
    Route::put('/admin/posts/{id}',[PostController::class,'changeStatus'])->name('admin.post.status');    
});
