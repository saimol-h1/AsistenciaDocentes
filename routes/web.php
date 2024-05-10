<?php
//ASS

use App\Http\Controllers\HomeLoginRegister;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeLoginRegister::class, 'index']);
