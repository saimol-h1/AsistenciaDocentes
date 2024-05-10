<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Hola bienvenido al post ";
    }
    public function create()
    {
        return "Aqui es el creat sale";
    }

    public function show($post)
    {
        return "Hola bienvenido a ${post}";
    }
}
