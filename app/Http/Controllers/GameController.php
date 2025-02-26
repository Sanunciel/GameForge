<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function exibirGames(){
        $games = Game::all();
        return view('game.exibir', ['games' => $games]);
    }
}
