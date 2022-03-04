<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list()
    {
        $data = Student::all(); //select * from students
        return view('student.list')->with('students', $data);
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
        $std = Student::where('id', $req->id)->first();
        return view('student.edit')
            ->with('id', $req->id)
            ->with('username', $std->username)
            ->with('name', $std->name)
            ->with('email', $std->email);
    }
    public function update(Request $req)
    {
        $st = Student::where('id', $req->id)->first();
        $st->name = $req->name;
        $st->username = $req->username;
        $st->email = $req->email;
        $st->save();
        return redirect("/student/list");
    }
}
