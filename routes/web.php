<?php

use App\Http\Controllers\LotteryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LotteryController::class, 'index'])->name('lottery.index');
Route::get('/generate', [LotteryController::class, 'generatePrizes'])->name('lottery.generate');
Route::post('/check', [LotteryController::class, 'checkPrize'])->name('lottery.check');
