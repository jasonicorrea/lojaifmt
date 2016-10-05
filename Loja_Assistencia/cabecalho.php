<?php
   
   function carregaArquivo($nomeArquivo){
       require_once ('model/'.$nomeArquivo.'.php');
       
   }
   
   spl_autoload_register("carregaArquivo");
   
?>


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
                        <li><a href="vendas.php">Vendas
                                <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>                                
                            </a>
                        </li>                                            
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultas <span class="caret"></span>
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="relatorios.php">Ordem de Serviço </a></li>
                                <li><a href="pesquisa_cliente.php">Cliente</a></li>
                                <li><a href="#">Funcionário</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav ">
                        <li>
                            <a>  
                                <SCRIPT LANGUAGE="JAVASCRIPT">
                                    <!--
                                var now = new Date();
                                    var mName = now.getMonth() + 1;
                                    var dName = now.getDay() + 1;
                                    var dayNr = now.getDate();
                                    var yearNr = now.getYear();
                                    if (dName == 1) {
                                        Day = "Domingo";
                                    }
                                    if (dName == 2) {
                                        Day = "Segunda-feira";
                                    }
                                    if (dName == 3) {
                                        Day = "Terça-feira";
                                    }
                                    if (dName == 4) {
                                        Day = "Quarta-feira";
                                    }
                                    if (dName == 5) {
                                        Day = "Quinta-feira";
                                    }
                                    if (dName == 6) {
                                        Day = "Sexta-feira";
                                    }
                                    if (dName == 7) {
                                        Day = "Sábado";
                                    }
                                    if (mName == 1) {
                                        Month = "Janeiro";
                                    }
                                    if (mName == 2) {
                                        Month = "Fevereiro";
                                    }
                                    if (mName == 3) {
                                        Month = "Março";
                                    }
                                    if (mName == 4) {
                                        Month = "Abril";
                                    }
                                    if (mName == 5) {
                                        Month = "Maio";
                                    }
                                    if (mName == 6) {
                                        Month = "Junho";
                                    }
                                    if (mName == 7) {
                                        Month = "Julho";
                                    }
                                    if (mName == 8) {
                                        Month = "Agosto";
                                    }
                                    if (mName == 9) {
                                        Month = "Setembro";
                                    }
                                    if (mName == 10) {
                                        Month = "Outubro";
                                    }
                                    if (mName == 11) {
                                        Month = "Novembro";
                                    }
                                    if (mName == 12) {
                                        Month = "Dezembro";
                                    }
                                    if (yearNr < 2000) {
                                        Year = 1900 + yearNr;
                                    } else {
                                        Year = yearNr;
                                    }
                                    var todaysDate = (" " + Day + ", " + dayNr + " de " + Month + " de " + Year);
                                    document.write('  ' + todaysDate);
                                    //-->
                                </SCRIPT>  
                                <span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span>                                

                                <SPAN ID="Clock">00:00:00</SPAN>

                                <SCRIPT LANGUAGE="JavaScript">
                                    <!--
                                  var Elem = document.getElementById("Clock");
                                    function Horario() {
                                        var Hoje = new Date();
                                        var Horas = Hoje.getHours();
                                        if (Horas < 10) {
                                            Horas = "0" + Horas;
                                        }
                                        var Minutos = Hoje.getMinutes();
                                        if (Minutos < 10) {
                                            Minutos = "0" + Minutos;
                                        }
                                        var Segundos = Hoje.getSeconds();
                                        if (Segundos < 10) {
                                            Segundos = "0" + Segundos;
                                        }
                                        Elem.innerHTML = Horas + ":" + Minutos + ":" + Segundos;
                                    }
                                    window.setInterval("Horario()", 1000);
                                    //-->
                                </SCRIPT>

                            </a>
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
