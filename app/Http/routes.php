<?php
//Arquivo responsavel pelas rotas

Route::get('/', function () {
    return view('welcome');
});

/* 
Rotas para controller básico
    Route::get('/sobre', 'InstitucionalController@sobre');
    Route::get('/contato', 'InstitucionalController@contato');
    Route::post('/contato', 'InstitucionalController@contatoEnviado');
*/

//Rota para controller Implícito
Route::controller('institucional', 'InstitucionalController');
















/*
//Criando uma rota de uma página de login, // ? para não obrigatorios, ='' definindo valor caso n seja passado
Route::get('/home/{nome}/{id}', function ($nome, $id) {
    return "$nome, Seja bem vindo. Seu número: $id";
})->where ('id', '[0-9]+');

Route::get('/inicio', function(){
    return view('teste');
});
*/