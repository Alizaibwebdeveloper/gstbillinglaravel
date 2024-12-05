<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PartiesTypeController;

Route::get('/', [AuthController::class, 'login']);
Route::post('login_post',[AuthController::class,'login_post']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/forgot-password', [AuthController::class, 'forgotpassword']);


Route::group(['middleware' => 'admin'], function () {
    
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/parties_type', [PartiesTypeController::class, 'parties_type']);
    Route::get('admin/parties_type/add', [PartiesTypeController::class, 'parties_type_add']);
    Route::post('admin/parties_type/add', [PartiesTypeController::class, 'parties_type_insert']);


    
});

Route::get('logout', [AuthController::class, 'logout']);

