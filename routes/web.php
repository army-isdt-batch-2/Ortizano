<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', [
    App\Http\Controllers\LoginController::class, 'index'
]);

Route::get('/table', [
    App\Http\Controllers\LoginController::class, 'table'
]);

Route::get('/layout', [
    App\Http\Controllers\LoginController::class, 'layout'
]);

Route::get('/Departments', [
    App\Http\Controllers\LoginController::class, 'Departments'
]);

Route::get('/Employees', [
    App\Http\Controllers\LoginController::class, 'Employees'
]);

Route::get('/Loans', [
    App\Http\Controllers\LoginController::class, 'Loans'
]);

Route::get('/Leaves', [
    App\Http\Controllers\LoginController::class, 'Leaves'
]);

Route::get('/Deductions', [
    App\Http\Controllers\LoginController::class, 'Deductions'
]);


Route::get('/Timekeeping', [
    App\Http\Controllers\LoginController::class, 'Timekeeping'
]);

Route::get('/Payslips', [
    App\Http\Controllers\LoginController::class, 'Payslips'
]);

Route::get('/Form', [
    App\Http\Controllers\LoginController::class, 'Form'
]);

Route::get('/Department/Create', [
    App\Http\Controllers\LoginController::class, 'Department_Create'
]);

Route::get('/Employee/Create', [
    App\Http\Controllers\LoginController::class, 'Employee_Create'
]);

Route::get('/Deduction/Create', [
    App\Http\Controllers\LoginController::class, 'Deduction_Create'
]);

Route::get('/Leaves/Create', [
    App\Http\Controllers\LoginController::class, 'Leaves_Create'
]);

Route::get('/Loans/Create', [
    App\Http\Controllers\LoginController::class, 'Loans_Create'
]);

Route::get('/Payslips/Create', [
    App\Http\Controllers\LoginController::class, 'Payslips_Create'
]);

Route::get('/Payslips/View', [
    App\Http\Controllers\LoginController::class, 'PV'
]);

Route::get('/Timekeeping/Create', [
    App\Http\Controllers\LoginController::class, 'Timekeeping_Create'
]);

Route::get('/Timekeeping/View', [
    App\Http\Controllers\LoginController::class, 'TV'
]);















