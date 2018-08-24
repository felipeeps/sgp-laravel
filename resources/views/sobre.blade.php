<!--Definindo o meu arquivo master do layout -->
@extends('layouts.master')

<!-- Definindo o titulo da minha pagina -->
@section('title', 'SGP: Pagina Inicial')

<!-- Chamando o yield container e incluindo meu HTML -->
@section('container')
    <div class="starter-template">
        <h1>Sobre</h1>
        <p class="lead">
            Sistema Web para gerenciamento de projetos.
            Desenvolvido utilizando laravel.
        </p>
    </div>
@endsection