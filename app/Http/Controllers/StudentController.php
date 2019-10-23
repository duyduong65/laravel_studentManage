<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function getAll()
    {
        $students = Student::all();
        return view("showListStudent", compact("students"));
    }

    function create()
    {
        return view("formCreate");
    }

    function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->save();
        return redirect()->route("student.getAll");
    }

    function delete($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route("student.getAll");
    }

    function edit($id)
    {
        $student = Student::findOrFail($id);
        return view("formEdit", compact("student"));
    }

    function update(Request $request,$id)
    {
        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->save();
        return redirect()->route("student.getAll");
    }
}
