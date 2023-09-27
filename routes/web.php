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
Route::view('/login','login');

//employees view

Route::view('/activeEmployee','employees.activeEmployee');
Route::view('/demographics','employees.demographics');
Route::view('/attritionPercentage','employees.attritionPercentage');
Route::view('/employeeAdd','employees.employeeAdd');
Route::view('/employeeList','employees.employeeList');
Route::view('/exEmployee','employees.exEmployee');
Route::view('/hiredEmployee','employees.hiredEmployee');
Route::view('/ijpEmployee','employees.ijpEmployee');
Route::view('/noticeEmployee','employees.noticeEmployee');
Route::view('/pip','employees.pip');
Route::view('/workFrom','employees.workFrom');

//client view
Route::view('/activeClients','clients.activeClients');
Route::view('/activeProcesses','clients.activeProcesses');
Route::view('/clientAdd','clients.clients.clientAdd');
Route::view('/clientList','clients.clientList');
Route::view('/clientsNotice','clients.clientsNotice');
Route::view('/clientsTransition','clients.clientsTransition');

//hiring
Route::view('/hiringAdd','hiring.hiringAdd');
Route::view('/hiringList','hiring.hiringList');

//settings
Route::view('/manageUser','profile.settings.manageUser');
Route::view('/settings','profile.settings.settings');
Route::view('/span','profile.settings.span');
