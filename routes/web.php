<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LetterTemplateController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\LetterTemplateWebController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/template-view', [LetterTemplateController::class, 'showView']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard/templates', [LetterTemplateWebController::class, 'index'])->name('templates.index');
});