<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InstitucionalController extends Controller {
    
    public function getSobre() {
        return view('sobre');
    }

    public function getContato() {
        return view('contato');
    }

    //Pegando as informações do meu formulário
    public function postContato(Request $request) {
        //Exibe todas as informações fornecidas
        return $request->all();
    }
}
