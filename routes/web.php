<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;

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
Route::get('/error', [DashboardController::class, 'error']);
Route::get('/logout', [DashboardController::class, 'logout']);

Route::middleware(['isLogin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/register', [DashboardController::class, 'register']);
    Route::get('/print', [DashboardController::class, 'print']);
    Route::get('/login', [DashboardController::class, 'pagelogin']);
    Route::post('/loginstore', [DashboardController::class, 'login']);
    Route::post('/store', [DashboardController::class, 'store']);
});

Route::middleware(['isGuest', 'isAdmin'])->group(function () {
    Route::get('/student', [DashboardController::class, 'landing']);
    Route::get('/pembayaran', [DashboardController::class, 'pembayaran']);
    Route::patch('/bayar/pending', [PaymentController::class, 'pending']);
    Route::post('/bayar', [PaymentController::class, 'bayar']);
});

Route::middleware(['isGuest', 'isStudent'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'admin']);
    Route::get('/verifikasi', [DashboardController::class, 'verifikasi']);
    Route::get('/admin/detail/{id}', [DashboardController::class, 'detail']);
    Route::get('/admin/pembayaran/{id}', [DashboardController::class, 'detailpembayaran']);
    Route::patch('/admin/success/{id}', [PaymentController::class, 'success']);
    Route::patch('/admin/failed/{id}', [PaymentController::class, 'failed']);
});

