<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function Departments()
    {
        return view('Departments');
    }
}
