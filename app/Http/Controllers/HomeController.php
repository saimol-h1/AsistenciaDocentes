<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //se usa un gelper para poder llamar vistas 
        return view('home');
    }
}
