<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list()
    {
        $students = array();
        for ($i = 0; $i < 10; $i++) {
            $student = array(
                "id" => $i + 1,
                "name" => "Student " . ($i + 1),
                "dept" => "CS"
            );
            $student = (object)$student;
            $students[] = $student;
        }
        return view('student.list')->with('students', $students);
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
    public function details($id)
    {
        return "OK with $id";
    }
}
