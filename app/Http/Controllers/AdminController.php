<?php

namespace App\Http\Controllers;

use App\User;

class AdminController extends MainController
{
    public function login()
    {
        return view('login.login');
    }
    public function index()
    {
        return view('admin.admin');
    }
}