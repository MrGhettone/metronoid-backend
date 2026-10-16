<?php

use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Login::class, 'login']);
