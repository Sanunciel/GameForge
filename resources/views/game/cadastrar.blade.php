@extends('layouts.index')
@section('titulo', 'Adicionar Jogo')
@section('content')
<link rel="stylesheet" href="/css/cadastrarjogo.css">
<div>
    <h1 id="titulo">Adicionar jogo</h1>
    <br>
</div>

<div id='main'>
    <form id='addjogo' method="POST">
        @csrf
        <fieldset class="formulario-jogo">
            <div class="campo">
                <label for="img"><strong>Capa do jogo</strong></label>
                <input type="file" name="img" id="img" required>
            </div>

            <div class="campo">
                <label for="nomejogo"><strong>Nome do jogo</strong></label>
                <input type="text" name="nomejogo" id="nomejogo" required>
            </div>

            <div class="campo">
                <label for="desc"><strong>Descrição</strong></label>
                <input type="textarea" name="descricao" id="desc" required>
            </div>

            <div class="campo">
                <label for="price"><strong>Preço</strong></label>
                <input type="text" name="price" id="price" required>
            </div>
        </fieldset>

        <button type="submit">Adicionar</button>
    </form>
</div>

<form action="">

</form>
@endsection