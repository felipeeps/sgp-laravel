<!--Definindo o meu arquivo master do layout -->
@extends('layouts.master')

<!-- Definindo o titulo da minha pagina -->
@section('title', 'SGP: Sobre')

<!-- Chamando o yield container e incluindo meu HTML -->
@section('container')
    <div class="starter-template">
        <h1>Detalhes do produto: {{$p->name_product}} </h1>
            <li>
                <b>Valor:</b> R$ {{$p->price_product}} 
            </li>
            <li>
                <b>Descrição:</b> {{$p->name_product}} 
            </li>
            <li>
                <b>Quantidade em estoque:</b> {{$p->quantity_product}}
            </li>

    </div>
@endsection