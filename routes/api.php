<?php

use App\Http\Controllers\Public\CarController;
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

Route::apiResource('cars', CarController::class)->names('cars')->only('index', 'show');
Route::get('car/makes', [CarController::class, 'makes'])->name('car.makes');
Route::get('car/{make}/models', [CarController::class, 'models'])->name('car.models');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
