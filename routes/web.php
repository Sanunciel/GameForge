<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('usuario.login');
});

Route::get('/cadastro', function () {
    return view('usuario.cadastrar');
});

Route::get('/addgame', function () {
    return view('game.cadastrar');
});

Route::post('/cadastro', [UserController::class, 'cadastrar']);

Route::get('/games', [GameController::class, 'exibirGames']);

Route::post('/addgame', [GameController::class, 'cadastrar']);
