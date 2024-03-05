<?php

use App\Http\Controllers\CausalController;
use App\Http\Controllers\observationController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('causal', CausalController::class);

Route::apiResource('observation', observationController::class);

Route::apiResource('type_activity', TypeActivityController::class);

Route::apiResource('technician', technicianController::class);