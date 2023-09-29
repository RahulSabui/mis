<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\dashboardController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\GlobalController;
use Illuminate\Support\Facades\Route;



Route::get('/signup', [AuthController::class, 'showLoginForm'])->name('loginForm');
Route::post('/login', [AuthController::class, 'login'])->name('login1');

Route::get('/states', [GlobalController::class, 'states'])->name('states');
Route::get('/designations', [GlobalController::class, 'designation'])->name('designation');

Route::middleware(['App\Http\Middleware\checkAuthenticated'])->group(function () {

    Route::get('/', [dashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/employee/basic/info', [EmployeeController::class, 'basicInfo'])->name('employeeBasicInfo');
    Route::post('/employee/address', [EmployeeController::class, 'address'])->name('employeeAddress');
    Route::post('/employee/additional/info', [EmployeeController::class, 'additonalInfo'])->name('employeeAdditionalInfo');
    Route::post('/employee/proccess/assignment', [EmployeeController::class, 'processAssignment'])->name('employeeProcessAssignment');
    Route::post('/employee/ijp', [EmployeeController::class, 'ijp'])->name('employeeIjp');
    Route::post('/fileUpload', [GlobalController::class, 'fileUpload'])->name('fileUpload');
    Route::post('/check/skid', [GlobalController::class, 'checkSkid'])->name('checkSkid');





    //employees view

    Route::view('/activeEmployee', 'employees.activeEmployee');
    Route::view('/demographics', 'employees.demographics');
    Route::view('/attritionPercentage', 'employees.attritionPercentage');
    Route::view('/employeeAdd', 'employees.employeeAdd');
    Route::view('/employeeList', 'employees.employeeList');
    Route::view('/exEmployee', 'employees.exEmployee');
    Route::view('/hiredEmployee', 'employees.hiredEmployee');
    Route::view('/ijpEmployee', 'employees.ijpEmployee');
    Route::view('/noticeEmployee', 'employees.noticeEmployee');
    Route::view('/pip', 'employees.pip');
    Route::view('/workFrom', 'employees.workFrom');
});





//client view
Route::view('/activeClients', 'clients.activeClients');
Route::view('/activeProcesses', 'clients.activeProcesses');
Route::view('/ProcessesTransition', 'clients.ProcessesTransition');
Route::view('/assignedResources', 'clients.assignedResources');
Route::view('/clientAdd', 'clients.clientAdd');
Route::view('/clientList', 'clients.clientList');
Route::view('/clientsNotice', 'clients.clientsNotice');
Route::view('/clientsTransition', 'clients.clientsTransition');

//hiring
Route::view('/hiringAdd', 'hiring.hiringAdd');
Route::view('/hiringList', 'hiring.hiringList');

//settings
Route::view('/manageUser', 'profile.settings.manageUser');
Route::view('/settings', 'profile.settings.settings');
Route::view('/span', 'profile.settings.span');

Route::view('/createUser', 'profile.createUser');
Route::view('/notification', 'profile.notification');