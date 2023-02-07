<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::middleware('auth.basic:,username')->group(function () {
    Route::post('posts', [PostController::class, 'storePost']);
});
Route::get('posts', [PostController::class, 'getPosts']);
