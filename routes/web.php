<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('employees', EmployeeController::class);
Route::get('/employees/{employee}/schedule', [EmployeeController::class, 'schedule'])->name('employees.schedule');
Route::post('/employees/{employee}/schedule', [EmployeeController::class, 'storeSchedule'])->name('employees.storeSchedule');
