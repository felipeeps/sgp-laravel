<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@section('title', 'SGP: Sistema de Gerenciamento de Projetos')</title> <!-- Seção Titulo, com valor para caso não tenha sido preenchido -->

    <!-- Inicio - Seção dos CSS -->
    @section('styles')

        <link href="css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap core CSS -->
        
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet"> <!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 

        <link href="css/starter-template.css" rel="stylesheet"> - <!-- Custom styles for this template -->

    <!-- FIM - Seção dos CSS -->
    @show

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Sistema de Gerenciamento de Projetos</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="<?= url('sobre') ?>">Sobre</a></li>
            <li><a href="<?= url('contato') ?>">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
        <!-- Inicio - Yield Container (Sem conteudo padrão) -->
        @yield('container')
    </div>

    <!-- Inicio Seção Scripts -->
    @section('scripts')
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        
    <!-- Fim Seção Scripts -->
    @show

  </body>
</html>