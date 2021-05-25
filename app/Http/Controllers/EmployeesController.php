<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function Employees()
    {
        return view('Employees');
    }
}
