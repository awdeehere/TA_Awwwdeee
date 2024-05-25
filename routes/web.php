<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PenghargaanController;
use App\Http\Controllers\Admin\SejarahController;
use App\Http\Controllers\Admin\VideoPembuatanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Front\ClientController;
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

Route::get('/', function () {
    return redirect('home');
});

// Login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

// Admin
Route::prefix('admin')->group(function () {
    Route::get('dashboard', DashboardController::class);
    Route::resource('sejarah', SejarahController::class);
    Route::resource('penghargaan', PenghargaanController::class);
    Route::resource('video-pembuatan', VideoPembuatanController::class);
});

Route::get('/', [ClientController::class, 'home']);
Route::get('home', [ClientController::class, 'home']);
Route::get('shop', [ClientController::class, 'shop']);
Route::get('product/{produk}', [ClientController::class, 'product']);
