<html>
    <head>
        <meta charset="utf-8">
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap-submenu.min.css">
        <script src="bootstrap/dist/js/bootstrap-submenu.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">                
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Inicio
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    </a>
                </div>                
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar <span class="caret"></span>
                            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="cadastrar_func_formulario.php">Funcionario</a></li>
                                <li><a href="cadastrar_clientes.php">Cliente</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Vendas
                                <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>                                
                            </a>
                        </li>                                            
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultas <span class="caret"></span>
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Ordem de Serviço </a></li>
                                <li><a href="pesquisa_cliente.php">Cliente</a></li>
                                <li><a href="#">Funcionário</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="#">Sair
                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                            </a>
                        </li>                                                                    
                        
                    </ul>
                </div>
            </div>
        </nav>        
    </body>     
</html>
