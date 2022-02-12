<?php

namespace App\Http\Controllers;

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
}
