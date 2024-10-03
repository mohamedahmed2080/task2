<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {


      $validata=  $request->validate(rules: [
            'name' => 'required',
            'password' => 'required',
            'phone'=>'required',
            'imges'=>'image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->password = bcrypt($request->password);
        $employee->phone =$request->phone;

        if ($request->hasFile('imges')) {
            $imageName = time().'.'.$request->imges->extension();
            $request->imges->move(public_path('images'), $imageName);
            $employee->imges = $imageName;
        }
        $employee->manager_id = $request->manager_id;


        $employee->save();



        // Employee::create([
        //     'name' => $request->name,
        //     'password' => bcrypt($request->password),
        //     'phone'=>$request->phone,
        //     'imges'=>$request->imges,
        //     'manager_id' => $request->manager_id,
        // ]);

        return redirect()->route('employees.index');
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
             'phone'=>'required',
            'imges'=>'image|mimes:jpeg,png,jpg,gif|max:2048'

        ]);

        $employee->name = $request->name;
        $employee->password = bcrypt($request->password);
        $employee->phone =$request->phone;

        if ($request->hasFile('imges')) {
            $imageName = time().'.'.$request->imges->extension();
            $request->imges->move(public_path('images'), $imageName);
            $employee->imges = $imageName;
        }



        $employee->save();


        return redirect()->route('employees.index');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index');
    }

}
