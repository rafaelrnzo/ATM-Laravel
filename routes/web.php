<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/saldo', [App\Http\Controllers\SaldoController::class, 'index']);
Route::get('/transfer', [App\Http\Controllers\TransferController::class, 'index']);
Route::get('/wd', [App\Http\Controllers\WithdrawController::class, 'index']);
Route::get('/transaksi', [App\Http\Controllers\TransactionController::class, 'index']);
