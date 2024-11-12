<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, "viewPage"])->defaults('page', 'home');
Route::get('/test', [UserController::class, "viewPage"])->defaults('page', 'test');
Route::get('/order-id', [UserController::class, "viewPage"])->defaults('page', 'order');

