<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list(){
        return view('student.list');
    }
    public function create(){
        return view('student.create');
    }
    public function get(){
        return view('student.get');
    }
}