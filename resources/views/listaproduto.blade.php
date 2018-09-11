<!--Definindo o meu arquivo master do layout -->
@extends('layouts.master')

<!-- Definindo o titulo da minha pagina -->
@section('title', 'SGP: Sobre')

<!-- Chamando o yield container e incluindo meu HTML -->
@section('container')
    <div class="starter-template">
    <h1>Listagem de Produtos </h1>
        <table class="table">
           <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Quantidade</td>
                <td>Preço R$</td>
                <td>Operações</td>
            </tr>
        
            @foreach($produtos as $p)  
    
            <!-- Se a quantidade for <= 1 coloque a classe danger senão não coloque nenhum classe -->
            <tr class="{{ $p->quantity_product <=1 ? 'danger' : '' }}">
                <td> {{$p->id_product}} </td>
                <td> {{$p->name_product}} </td>
                <td> {{$p->quantity_product}} </td>
                <td>R$ {{$p->price_product}} </td>

                <td>
                    <a href="listaprodutos/mostra?id_product={{$p->id_product}}" >
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>

            @endforeach

    </table>  

        @if(old('name_product'))
            <div class="alert alert-sucess">
                Produto {{old('name_product')}} com sucesso!
            </div>
        @endif
    </div>
@endsection