@extends('layouts.index')
@section('titulo', 'GameForge')
@section('content')

<link rel="stylesheet" href="/css/welcome.css">

<div id="banner_principal">
      <img src="img/banner.png" class="d-block w-100" alt="imagem de um console" width="500px" height="500px">
</div>

<h2>JOGOS MAIS VENDIDOS</h2>

<div id="jogos">
  <div class="card" style="width: 18rem;">
    <img src="img/jogo1.png" class="card-img-top" width="100px" height="300px" alt="jogo um">
    <div class="card-body">
      <h5 class="card-title">The Loocker</h5>
      <p class="card-text">The Loocker é um jogo de aventura e enigmas em um mundo vibrante, onde tudo está de olho em você! Explore cenários coloridos, desvende segredos e encare desafios surpreendentes para revelar o mistério por trás dos olhos curiosos.</p>
      <a href="#" class="btn btn-secondary">Comprar</a>

    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="img/jogo2.PNG" class="card-img-top" width="100px" height="300px" alt="jogo dois">
    <div class="card-body">
      <h5 class="card-title">Gold Runner</h5>
      <p class="card-text">Gold Runner é um jogo de ação onde você explora minas perigosas em busca de ouro, enfrentando inimigos, armadilhas e desafios. Colete tesouros, resolva enigmas e corra contra o tempo em uma aventura cheia de adrenalina e aventura. </p>
      <a href="#" class="btn btn-secondary">Comprar</a>

    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="img/jogo3.png" class="card-img-top" width="100px" height="300px" alt="jogo três">
    <div class="card-body">
      <h5 class="card-title">BigBall</h5>
      <p class="card-text">BigBall é um jogo arcade divertido e desafiador onde você controla uma bola gigante através de obstáculos, plataformas e terrenos variados. Use habilidade e estratégia para evitar armadilhas e coletar bônus pelo caminho.</p>
      <a href="#" class="btn btn-secondary">Comprar</a>

    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="img/jogo4.jpg" class="card-img-top" width="100px" height="300px" alt="jogo três">
    <div class="card-body">
      <h5 class="card-title">Life Simulator</h5>
      <p class="card-text">Life Simulator é um jogo de simulação onde você cria e gerencia a vida de um personagem, tomando decisões sobre carreira, relacionamentos, saúde e sonhos, moldando seu caminho e sua personalidade a cada clique..</p>
      <a href="#" class="btn btn-secondary">Comprar</a>

    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="img/jogo5.jpg" class="card-img-top" width="100px" height="300px" alt="jogo três">
    <div class="card-body">
      <h5 class="card-title">Call of Darkness</h5>
      <p class="card-text">Em meio a florestas envoltas em névoa, ruínas de civilizações antigas e lugares abandonados, as sombras guardam histórias esquecidas, e nem todos os que houvem o chamado conseguem sair vivos para contá-las.</p>
      <a href="#" class="btn btn-secondary">Comprar</a>

    </div>
  </div>
</div>
@endsection
