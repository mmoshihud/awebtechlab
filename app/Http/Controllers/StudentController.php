<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list()
    {
        $data = Student::all(); //select * from students
        return view('student.list')->with('st', $data);
    }
    public function create()
    {
        return view('student.create');
    }
    public function get()
    {
        $name = "Tanvir Ahmed";
        $id = "123";
        $courses = ["PL1", "PL2", "WEBTECH", "JAVA", "OS"];
        return view('student.get')
            ->with('name', $name)
            ->with('id', $id)
            ->with('courses', $courses);
    }
    public function details(Request $req)
    {
        return view('student.get')
            ->with('name', $req->name)
            ->with('id', $req->id);
    }
    public function edit(Request $req)
    {
        $id = $req->id;
        $student = Student::where('id', $req->id)->first();
        return $student;
    }
}
