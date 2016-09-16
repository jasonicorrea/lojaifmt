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
        <table >
            <tr>
                <td>
                    <div  class="dropdown m-b">
                        <button class="btn btn-primary" type="button" data-toggle="dropdown">
                            Cadastros
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">                            
                            <li><a href="cadastrar_func_formulario.php" tabindex="0">Funcionario</a></li>
                                    <li><a tabindex="0">Cliente</a></li>                                    
                        </ul>

                    </div>
                </td>
                <td>
                    <div >
                        <button class="btn btn-primary" type="button">
                            Vendas
                        </button>
                  </div>
                </td>
                <td>
                    <div  class="dropdown m-b">
                        <button class="btn btn-primary" type="button" data-toggle="dropdown">
                            Consulta
                            <span class="caret"></span>
                        </button>

                        <ul class="dropdown-menu" role="menu">                            
                                    <li><a tabindex="0">Ordem de Servico</a></li>
                                    <li><a tabindex="0">Cliente</a></li>
                                    <li><a tabindex="0">Funcionario</a></li>
                        </ul>

                    </div>
                </td>
                <td>
                    <div >
                        <button class="btn btn-primary" type="button">
                            Sair
                        </button>
                  </div>
                </td>                
            </tr>
        </table>                    
        <script>

            $('.dropdown-submenu > a').submenupicker();

        </script>

    </body>     
</html>
