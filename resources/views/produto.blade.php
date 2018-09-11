<!--Definindo o meu arquivo master do layout -->
@extends('layouts.master')

<!-- Definindo o titulo da minha pagina -->
@section('title', 'Loja: Novo Produto')

<!-- Chamando o yield container e incluindo meu HTML -->
@section('container')
    <h1>Cadastro de Produtos</h1>

    <form action="adiciona" method="post">
       
        {!! csrf_field() !!} 
        
        <p class="form-group">
            <label for="nome">Nome</label>
            <input class="form-control" type="text" name="nome" placeholder="Entre com o nome do produto">
        </p>
        <p class="form-group">
            <label for="quantidade">Quantidade</label>
            <input class="form-control" type="text" name="quantidade" placeholder="Entre com a quantidade disponivel">
        </p>

        <p class="form-group">
            <label for="preco">Preço</label>
            <input class="form-control" type="text" name="preco" placeholder="Entre com o preço do produto">
        </p>

        <p class="form-group">
            <input class="btn btn-default" type="reset" value="Limpar">
            <input class="btn btn-default" type="submit" value="Enviar">
        </p>
    </form>
@endsection