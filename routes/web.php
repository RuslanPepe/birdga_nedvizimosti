<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\handlerGetRequest;

Route::get('/', [UserController::class, "viewPage"])->defaults('page', 'home');
Route::get('/test', [UserController::class, "viewPage"])->defaults('page', 'test');
Route::get('/favorite', [UserController::class, "viewPage"])->defaults('page', 'favorite');
Route::get('/order-id', [UserController::class, "viewPage"])->defaults('page', 'order');
Route::get('/order-create', [UserController::class, "viewPage"])->defaults('page', 'order-create');
Route::get('/handler', [handlerGetRequest::class, "handlerRequest"]);
