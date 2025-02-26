<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function cadastrar(Request $request){
        $user = new User();

        $user->nome = $request->nome;
        $user->cpf = $request->cpf;
        $user->email = $request->email;
        $user->rg = $request->rg;
        $user->endereco = $request->endereco;
        $user->telefone = $request->telefone;
        $user->genero = $request->genero;
        $user->data_nascimento = $request->nascimento;
        $user->password = $request->password;

        $user->save();

        return redirect('/');
    }
}
