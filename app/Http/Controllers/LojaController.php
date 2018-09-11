<?php
    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\DB;
    use Request;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;

class LojaController extends Controller{
    
    public function cadastro(){
        return view('produto');
    }

    public function adiciona(){

        //Pegar as informações do form
        $nome = Request::input('nome');
        $quantidade = Request::input('quantidade');
        $preco = Request::input('preco');

        //Salvar no meu BD
        DB::insert('insert into products (name_product, quantity_product, price_product) values (?,?,?)', 
        array($nome, $quantidade, $preco));

        //Redirecionado para a pagina das listagens - withInput (Mantem os parametros da requisição anterior  - Adicionar OLD no html)
        return redirect('/listaprodutos')->withInput();
    }

    public function lista(){
        $produtos = DB::select('select * from products');
        //Enviando a view + a variavel produtos
        return view('listaproduto')->with('produtos', $produtos);
    }

    public function mostra(){

        $id = Request::input('id_product', '0');
      
        $resposta = DB::select('select * from products where id_product = ?', [$id]);
      
        if(empty($resposta)) {
          return "Esse produto não existe";
        }
        return view('detalhes')->with('p', $resposta[0]);
      }
}
