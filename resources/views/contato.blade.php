<!--Definindo o meu arquivo master do layout -->
@extends('layouts.master')

<!-- Definindo o titulo da minha pagina -->
@section('title', 'SGP: Contato')

<!-- Chamando o yield container e incluindo meu HTML -->
@section('container')
    <h1>Entre em contato!</h1>

    <form action="" method="post">
        {!! csrf_field() !!}
        <p class="form-group">
            <label for="nome">Nome</label>
            <input class="form-control" type="text" name="nome" placeholder="Entre com o seu nome">
        </p>
        <p class="form-group">
            <label for="email">E-mail</label>
            <input class="form-control" type="email" name="email" placeholder="Entre com o seu E-mail">
        </p>
        <p class="form-group">
            <label for="mensagem">Mensagem</label>
            <textarea class="form-control" name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
        </p>
        <p class="form-group">
            <input class="btn btn-default" type="reset" value="Limpar">
            <input class="btn btn-default" type="submit" value="Enviar">
        </p>
    </form>
@endsection