<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Employee::all();
        return view("employees.index", compact("empleados"));
    }

    public function byId()  {
        $empleados = Employee::orderBy("emp_id", "desc")->get();
        return view("employees.index",compact("empleados"));
    }

    public function byLastName()  {
        $empleados = Employee::orderBy("emp_lastname", "asc")->orderBy("emp_firstname", "asc")->get();
        return view("employees.index", compact("empleados"));
    }

    public function lastNameStartsWith()  {
        $empleados = Employee::where("emp_firstname", "LIKE", "A%")->get();
        return view("employees.index", compact("empleados"));
    }

    public function bornIn()  {
        $empleados = Employee::whereYear("emp_birth_date", "1990")->get();
        return view("employees.index", compact("empleados"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
