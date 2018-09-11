<!--Definindo o meu arquivo master do layout -->
@extends('layouts.master')

<!-- Definindo o titulo da minha pagina -->
@section('title', 'Loja: Novo Produto')

<!-- Chamando o yield container e incluindo meu HTML -->
@section('container')

Produto {{$name_product}} com sucesso!