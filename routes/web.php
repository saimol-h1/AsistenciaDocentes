<?php
//ASS

use App\Http\Controllers\adminHorarios;
use App\Http\Controllers\controlDeIngreso;
use App\Http\Controllers\controlDeResgistroDeAsistencia;
use App\Http\Controllers\HomeLoginRegister;
use App\Http\Controllers\RegistroUsuarios;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeLoginRegister::class, 'index']);
Route::get('/login', [controlDeIngreso::class, 'index']);
Route::get('/resgistro', [RegistroUsuarios::class, 'index']);
Route::get('/login/rgistroAsistencia', [controlDeResgistroDeAsistencia::class, 'index']);
Route::get('/login/administrador', [adminHorarios::class, 'index']);
