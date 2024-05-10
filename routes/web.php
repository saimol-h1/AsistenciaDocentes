<?php
//Es el encardo de resivir las peticiones, que nos permite ver 
//diferentes contenidos
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
//**************vistas**************

//***********Rutas con logica separada**************** */
// Route::get('/', [HomeController::class, "index"]);

// Route::get('/posts', [PostController::class, "index"]);

// Route::get('/posts/create', [PostController::class, "create"]);

// Route::get('/posts/{post}', [PostController::class, "show"]);

//return view('Welcome');

// Route::get('/posts', function () {
//     return "Hola bienvenido a posts";
// });

//#################rutas con parametros#################
//****************un parametro**********

// Route::get('/posts/{post}', function ($post) {
//     return "Hola bienvenido a ${post}";
// });

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