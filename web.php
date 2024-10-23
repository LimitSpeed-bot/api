<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\TeamController;
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

Route::controller(BerandaController::class)->prefix('/')->group(function () {
    Route::get('', 'index')->name('beranda');

});

Route::controller(BukuController::class)->prefix('barang')->group(function () {
    Route::get('', 'index')->name('barang');
    Route::post('store', 'store')->name('barang.store');
});
Route::controller(PeminjamanController::class)->prefix('peminjaman')->group(function () {
    Route::get('', 'index')->name('peminjaman');
});
Route::controller(TeamController::class)->prefix('team')->group(function () {
    Route::get('', 'index')->name('team');
});
