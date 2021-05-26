<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', [
    App\Http\Controllers\LoginController::class, 'index'
])->name('login');

Route::get('/table', [
    App\Http\Controllers\LoginController::class, 'table'
])->name('table');

Route::get('/layout', [
    App\Http\Controllers\LoginController::class, 'layout'
])->name('layout');

Route::get('/Departments', [
    App\Http\Controllers\LoginController::class, 'Departments'
])->name('Departments');

Route::get('/Employees', [
    App\Http\Controllers\LoginController::class, 'Employees'
])->name('Employees');

Route::get('/Loans', [
    App\Http\Controllers\LoginController::class, 'Loans'
])->name('Loans');

Route::get('/Leaves', [
    App\Http\Controllers\LoginController::class, 'Leaves'
])->name('Leaves');

Route::get('/Deductions', [
    App\Http\Controllers\LoginController::class, 'Deductions'
])->name('Deductions');


Route::get('/Timekeeping', [
    App\Http\Controllers\LoginController::class, 'Timekeeping'
]);

Route::get('/Payslips', [
    App\Http\Controllers\LoginController::class, 'Payslips'
])->name('Payslips');

Route::get('/Form', [
    App\Http\Controllers\LoginController::class, 'Form'
])->name('Form');

Route::get('/Department/Create', [
    App\Http\Controllers\LoginController::class, 'Department_Create'
])->name('Department.Create');

Route::get('/Employee/Create', [
    App\Http\Controllers\LoginController::class, 'Employee_Create'
])->name('Employee.Create');

Route::get('/Deduction/Create', [
    App\Http\Controllers\LoginController::class, 'Deduction_Create'
])->name('Deduction.Create');

Route::get('/Leaves/Create', [
    App\Http\Controllers\LoginController::class, 'Leaves_Create'
])->name('Leaves.Create');

Route::get('/Loans/Create', [
    App\Http\Controllers\LoginController::class, 'Loans_Create'
])->name('Loans.Create');

Route::get('/Payslips/Create', [
    App\Http\Controllers\LoginController::class, 'Payslips_Create'
])->name('Payslips.Create');

Route::get('/Payslips/View', [
    App\Http\Controllers\LoginController::class, 'PV'
])->name('Payslips.View');

Route::get('/Timekeeping/Create', [
    App\Http\Controllers\LoginController::class, 'Timekeeping_Create'
]);->name('Timekeeping.Create')

Route::get('/Timekeeping/View', [
    App\Http\Controllers\LoginController::class, 'TV'
])->name('Timekeeping.View');















