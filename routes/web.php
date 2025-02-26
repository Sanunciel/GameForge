<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastroUser', function () {
    return view('usuario.cadastrar');
});

Route::post('/cadastroUser', [UserController::class, 'cadastrar']);

Route::get('/games', [GameController::class, 'exibirGames']);
