<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/recuperar-contrasena', function () {
    return view('auth.recuperar-contrasena');
})->name('recuperar-contrasena');
