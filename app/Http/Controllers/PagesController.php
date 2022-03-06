<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function login()
    {
        return view('login.login');
    }
    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
    public function profile_login(Request $req)
    {
        $std = Student::where('username', $req->uname)->where('password', hash('sha3-256', $req->psw))->first();
        if ($std) {
            session()->put('username', $std->username);
            return redirect()->route('student.list');
        } else {
            return "failed";
        }
    }
    public function profile_view()
    {
        return view('login.profile');
    }
    public function encrypt()
    {
        return view('/login/encrypt');
    }
    public function encryption(Request $req)
    {
        $text = $req->input('name');
        $md5 = md5($text);
        $sha = hash('sha256', $text);
        $sha1 = hash('sha3-256', $text);
        return "Md5 encryption: $md5 <br>SHA-256 encryption: $sha <br> Shah-3-256 encryption: $sha1";
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
        $st->password = hash('md5', $req->password);
        $st->email = $req->email;
        $st->save(); //runs query in db
        return redirect("/student/list");
    }
}
