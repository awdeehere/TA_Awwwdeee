<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SejarahController;
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
    return redirect('admin/dashboard');
});

Route::prefix('admin')->group(function () {
    Route::get('dashboard', DashboardController::class);
    Route::resource('sejarah', SejarahController::class);
});
