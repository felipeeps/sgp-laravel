<?php
//Arquivo responsavel pelas rotas

Route::get('/', function () {
    return 'Projeto Laravel - TADS 6º Periodo';
});

//Criando uma rota de uma página de login
Route::get('/home/{nome}', function ($nome) {
    return "$nome, Seja bem vindo";
});
