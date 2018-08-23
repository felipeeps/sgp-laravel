<?php
//Arquivo responsavel pelas rotas

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function(){
    return view('sobre');
});

Route::get('/contato', function(){
    return view('contato');
});
















/*
//Criando uma rota de uma página de login, // ? para não obrigatorios, ='' definindo valor caso n seja passado
Route::get('/home/{nome}/{id}', function ($nome, $id) {
    return "$nome, Seja bem vindo. Seu número: $id";
})->where ('id', '[0-9]+');

Route::get('/inicio', function(){
    return view('teste');
});
*/