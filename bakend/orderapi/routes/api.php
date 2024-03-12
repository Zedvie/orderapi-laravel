<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CausalController;
use App\Http\Controllers\observationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\technicianController;
use App\Http\Controllers\TypeActivityController;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('auth/login',[AuthController::class,'login'])->name('auth.login');

Route::post('auth/register',[AuthController::class,'register'])->name('auth.register');

Route::middleware('auth:sanctum')->group(function(){
    Route::post('auth/logout',[AuthController::class,'logout'])->name('auth.logout');
    Route::apiResource('causal', CausalController::class);
    Route::apiResource('observation', observationController::class);
    Route::apiResource('type_activity', TypeActivityController::class);
    Route::apiResource('technician', technicianController::class);
    Route::apiResource('activity',ActivityController::class);
    Route::apiResource('order',OrderController::class);
    Route::get('order/add_activity{order}/{activity}',[OrderController::class, 'add_activity'])->name('order.add_activity');
    Route::get('order/remove_activity{order}/{activity}',[OrderController::class, 'add_activity'])->name('order.remove_activity');
});

