<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Tambahkan use controller
use App\Http\Controllers\LetterTemplateController;
use App\Http\Controllers\LetterRequestController;
use App\Http\Controllers\GeneratedLetterController;

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

Route::middleware('auth:sanctum')->group(function () {

    // Template surat
    Route::get('/templates', [LetterTemplateController::class, 'index']);
    Route::post('/templates', [LetterTemplateController::class, 'store']);

    // Pengajuan surat
    Route::post('/requests', [LetterRequestController::class, 'store']);

    // Surat resmi
    Route::post('/letters', [GeneratedLetterController::class, 'store']);
});
