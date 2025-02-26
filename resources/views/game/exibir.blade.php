@extends('layouts.index')
@section('titulo', 'Jogos')
@section('content')
<link rel="stylesheet" href="/css/exibirgames.css">
<div id="jogos">
@foreach ($games as $game)
<div class="card" style="width: 18rem;">
    <img src="img/jogo5.jpg" class="card-img-top" width="100px" height="300px" alt="jogo três">
    <div class="card-body">
      <h5 class="card-title">{{ $game->nome }}</h5>
      <p class="card-text">{{ $game->price }}</p>
      <a href="#" class="btn btn-secondary">Comprar</a>
    </div>
  </div>
@endforeach
</div>
@endsection