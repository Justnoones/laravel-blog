<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'index']);
Route::get('/home', [BlogController::class, 'index']);
Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [AuthController::class, 'create']);
    Route::post('/register', [AuthController::class, 'store']);
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/login', [AuthController::class, 'post_login']);
});
