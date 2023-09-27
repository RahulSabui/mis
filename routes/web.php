<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\dashboardController;
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
Route::middleware(['check.authentication'])->group(function () {

    Route::get('/', [dashboardController::class , 'dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController:: class , 'logout'])->name('logout');
});

// Route::view('/singup','login');
Route::get('/signup', [AuthController::class, 'showLoginForm'])->name('loginForm');

Route::post('/login', [AuthController::class, 'login'])->name('login1');