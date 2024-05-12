<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeLoginRegister extends Controller
{
    function index()
    {
        return view('welcome');
    }
}
