<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PartiesTypeController;
use App\Http\Controllers\GSTBillsController;

Route::get('/', [AuthController::class, 'login']);
Route::post('login_post',[AuthController::class,'login_post']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/forgot-password', [AuthController::class, 'forgotpassword']);
Route::get('logout', [AuthController::class, 'logout']);


Route::group(['middleware' => 'admin'], function () {
    
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/parties_type', [PartiesTypeController::class, 'parties_type']);
    Route::get('admin/parties_type/add', [PartiesTypeController::class, 'parties_type_add']);
    Route::post('admin/parties_type/add', [PartiesTypeController::class, 'parties_type_insert']);

    Route::get('admin/parties_type/edit/{id}', [PartiesTypeController::class, 'parties_type_edit']);
    Route::post('admin/parties_type/edit/{id}', [PartiesTypeController::class, 'parties_type_update']);
    Route::get('admin/parties_type/delete/{id}', [PartiesTypeController::class, 'parties_type_delete']);

    Route::get('admin/parties', [PartiesTypeController::class, 'parties']);
    Route::get('admin/parties/add', [PartiesTypeController::class, 'parties_add']);
    Route::post('admin/parties/add', [PartiesTypeController::class, 'parties_insert']);

    Route::get('admin/parties/edit/{id}', [PartiesTypeController::class, 'parties_edit']);
    Route::post('admin/parties/edit/{id}', [PartiesTypeController::class, 'parties_update']);

    Route::get('admin/parties/delete/{id}', [PartiesTypeController::class, 'parties_delete']); 
    
    Route::get('admin/gst_bills',[GSTBillsController::class,'gst_bills']);
    Route::get('admin/gst_bills/add',[GSTBillsController::class,'gst_bills_add']);
    Route::post('admin/gst_bills/add', [GSTBillsController::class,'gst_bills_insert']);
});


