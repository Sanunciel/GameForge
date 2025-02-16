<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastroUser', function () {
    return view('usuario.cadastrar');
});
