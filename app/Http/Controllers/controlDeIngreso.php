<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlDeIngreso extends Controller
{
    function index()
    {
        return view('loginForm');
    }
}
