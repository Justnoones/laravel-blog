<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index']);

Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);

Route::get('/author/{user:username}', [BlogController::class, 'filter_author']);

Route::get('/categories/{category:slug}', [BlogController::class , 'filter_category']);
