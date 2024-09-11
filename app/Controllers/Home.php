<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('landingpage/index');
    }
    public function login()
    {
        return view('login_admin');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
