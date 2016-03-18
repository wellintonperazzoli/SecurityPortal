<?php

namespace App\Http\Controllers;

use App\User;

class SiteController extends MainController
{
    public function index()
    {
        return view('index');
    }
}