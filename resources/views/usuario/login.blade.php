@extends('layouts.index')
@section('titulo', 'Login')
@section('content')
<link rel="stylesheet" href="/css/login.css">
<div>
    <h1 id="titulo">Login</h1>
    <br>
</div>

<div id='main'>
    <form action="" id='login'>
        <fieldset class="formulario-login">
            <div class="campo">
                <label for="email"><strong>Email</strong></label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="campo">
                <label for="senha"><strong>Senha</strong></label>
                <input type="password" name="senha" id="senha" required>
            </div>
        </fieldset>

        <p>Não possui cadastro? <a href="/cadastro">Cadastre-se</a> </p>
        <button type="submit">Login</button>
    </form>
</div>
@endsection