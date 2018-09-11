    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SGV</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{url('/')}}">Home</a></li>
            
            <li>
                <a href="{{url('institucional/sobre')}}">Sobre</a>
            </li>

            <li>
              <a href="{{url('institucional/contato')}}">Contato</a>
            </li>

            <li>
                <a href="{{url('cadastro')}}">Novo Produto</a>
            </li>

            <li>
                <a href="{{url('listaprodutos')}}">Lista de Produtos</a>
            </li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
