<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\PostController;

Route::inertia('/', 'Home');
//Route::inertia('/order-id', 'Order-id');
Route::get('/order-id', [UserController::class, 'showVuejs']);
Route::get('/post', [PostController::class, 'index']);
