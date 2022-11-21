<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/user', [UserController::class, 'index'])->name('user.index')->middleware('auth.basic:,username');
