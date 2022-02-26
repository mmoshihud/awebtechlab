<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login()
    {
        return view('login.login');
    }
    public function register()
    {
        return view('login.registration');
    }
    public function registersubmit(Request $req)
    {
        $req->validate(
            [
                'name' => 'required|regex:/^[A-Z a-z]+$/',
                'username' => 'required|min:5|max:20',
                'email' => 'required|email',
                'password' => 'required|min:1',
                'conf_password' => 'required|same:password'
            ],
            [
                'username.required' => 'Please provide username',
                'username.max' => 'Username must not exceed 20 alphabets',
                'conf_password.same' => 'Password and confirm password must match'
            ]
        );
        $st = new Student();
        $st->name = $req->name;
        $st->username = $req->username;
        $st->password = $req->password;
        $st->email = $req->email;
        $st->save(); //runs query in db
        return "<h1>You are successfull person and your id $req->name</h1>";
    }
}
