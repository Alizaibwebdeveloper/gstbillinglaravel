<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/forgot-password', [AuthController::class, 'forgotpassword']);
