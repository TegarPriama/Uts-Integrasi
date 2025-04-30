<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
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
Route::prefix('reservations')->group(function () {
    Route::get('/', [ReservationController::class, 'index']); // Get all
    Route::post('/', [ReservationController::class, 'store']); // Create
    Route::get('{id}', [ReservationController::class, 'show']); // Show one
    Route::put('{id}', [ReservationController::class, 'update']); // Update
    Route::delete('{id}', [ReservationController::class, 'destroy']); // Delete
});
