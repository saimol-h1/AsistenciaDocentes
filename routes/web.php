<?php
//Es el encardo de resivir las peticiones, que nos permite ver 
//diferentes contenidos
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/posts', function () {
    return "Hola bienvenido a posts";
});
