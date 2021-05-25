<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
       
    }
    
    public function Login()
    {
        return view('Login');
    }

    public function table()
    {
        return view('table');
    }

    public function layout()
    {
        return view('layout');
    }

    public function Departments()
    {
        return view('Departments');
    }

    public function Employees()
    {
        return view('Employees');
    }

    public function Loans()
    {
        return view('Loans');
    }

    public function Leaves()
    {
        return view('Leaves');
    }

    public function Deductions()
    {
        return view('Deductions');
    }

    public function Timekeeping()
    {
        return view('Timekeeping');
    }

    public function Payslips()
    {
        return view('Payslips');
    }

    public function Form()
    {
        return view('Form');
    }

    public function Department_Create()
    {
        return view('create_form.departments');
    }

    public function Employee_Create()
    {
        return view('create_form.employees');
    }

    public function Deduction_Create()
    {
        return view('create_form.deductions');
    }

    public function Leaves_Create()
    {
        return view('create_form.leaves');
    }

    public function Loans_Create()
    {
        return view('create_form.loans');
    }

    public function Payslips_Create()
    {
        return view('create_form.payslips');
    }

    public function PV()
    {
        return view('PV');
    }

    public function Timekeeping_Create()
    {
        return view('create_form.timekeeping');
    }

    public function TV()
    {
        return view('TV');
    }
    




}
