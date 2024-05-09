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

//#################rutas con parametros#################
//****************un parametro**********

Route::get('/posts/{post}', function ($post) {
    return "Hola bienvenido a ${post}";
});

//*******************dos parametros **********************
// Route::get('/posts/{post}/{categoria}', function ($post, $categoria) {
//     return "Hola bienvenido a ${post} de la categoria ${categoria}";
// });

//****************Parametros variables********************
// Route::get('/posts/{post}/{categoria?}', function ($post, $categoria = null) {
//     if ($categoria) {
//         return "Hola bienvenido a ${post} de la categoria ${categoria}";
//     }
//     return "Hola bienvenido a ${post}";
// });

// Es imporante definir la ruta de manera ordenada, primero los de mayor importancias
//y los ultimos los menos necesarios ingresar