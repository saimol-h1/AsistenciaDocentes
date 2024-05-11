<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroUsuarios extends Controller
{
    function index()
    {
        return view('registerForm');
    }
}
