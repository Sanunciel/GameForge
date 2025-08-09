@extends('layouts.index')
@section('titulo', 'GameForge | Cadastro')
@section('content')
<link rel="stylesheet" href="/css/cadastrar.css">
<body>
    <form id="formulario" method="POST">
        @csrf
            <div>
                <h1 id="titulo">Cadastro de Usuários</h1>
                <br>
            </div>

            <fieldset class="linha-formulario">
                <div class="campo">
                    <label for="nome"><strong>Nome</strong></label>
                    <input type="text" name="nome" id="nome" required>
                </div>
    
                <div class="campo">
                    <label for="cpf"><strong>CPF</strong></label>
                    <input type="text" name="cpf" id="cpf" required>
                </div>
            </fieldset>
            
            <fieldset class="linha-formulario">
                <div class="campo">
                    <label for="email"><strong>Email</strong></label>
                    <input type="email" name="email" id="email" required>
                </div>
    
                <div class="campo">
                    <label for="rg"><strong>RG</strong></label>
                    <input type="text" name="rg" id="rg">
                </div>
            </fieldset>

            <fieldset class="linha-formulario">
                <div class="campo">
                    <label for="endereco"><strong>Endereço</strong></label>
                    <input type="text" name="endereco" id="endereco" required>
                </div>
    
                <div class="campo">
                    <label for="telefone"><strong>Telefone</strong></label>
                    <input type="tel" name="telefone" id="telefone">
                </div>
            </fieldset>

            <fieldset class="linha-formulario">
                <div class="campo">
                    <label for="genero"><strong>Gênero</strong></label>
                    <select name="genero" id="genero">
                        <option value="masc">Masculino</option>
                        <option value="fem">Feminino</option>
                        <option value="no">Prefiro não informar</option>
                    </select>
                </div>

                <div class="campo" id="data-nascimento">
                    <label for="nascimento"><strong>Data de nascimento</strong></label>
                    <input type="date" name="nascimento" id="nascimento">
                </div>
            </fieldset>

            <fieldset>
                <div class="campo">
                    <label for="senha"><strong>Senha</strong></label>
                    <input type="password" name="password" id="senha">
                </div>

                <div class="campo">
                    <label id='confirmsenha' for="confirmsenha"><strong>Confirmar senha</strong></label>
                    <input type="password" name="passwordcomf" id="confirmasenha">
                </div>
            </fieldset>

            <button id="botao" type="submit">Cadastrar</button>
                
    </form>
</body>
@endsection