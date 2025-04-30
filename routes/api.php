<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WashServiceController;

Route::apiResource('wash-services', WashServiceController::class);
Route::post('/wash-services', [WashServiceController::class, 'store']);
