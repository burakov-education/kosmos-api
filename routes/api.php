<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/registration', [AuthController::class, 'registration']);
Route::post('/authorization', [AuthController::class, 'authorization']);

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
