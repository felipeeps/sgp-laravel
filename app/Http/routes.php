<?php
//Arquivo responsavel pelas rotas
//Alguns Exemplos:

//Cria a rota passando o nome da chamada + função anonima
Route::get('/empresa', function(){
    return view('empresa');
});

Route::get('/contato', function(){
    return 'Contato';
})->name('rota.nomeada');

//Usado para submissão de formulários
Route::post('/post', function(){
    return 'Route POST';
});

//Passando vários tipos de rota vou usar nesse endereço
Route::match(['get', 'post'], '/match', function(){
    return 'Route Match';
});

Route::get('/', function () {
    return 'Meu Projeto Laravel';
});
