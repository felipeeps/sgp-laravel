<!--Definindo o meu arquivo master do layout -->
@extends('layouts.master')

<!-- Definindo o titulo da minha pagina -->
@section('title', 'SGP: Pagina Inicial')

<!-- Chamando o yield container e incluindo meu HTML -->
@section('container')
  <div class="starter-template">
    <h1>Bem vindo ao Sistema de gerenciamento de projetos</h1>
  </div>
@endsection