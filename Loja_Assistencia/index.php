
<html>
    <head>
        <meta charset="utf-8">
        <style>
    @import "bourbon";

body {
	background: #eee !important;	
}

.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	}

	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		

		&:focus {
		  z-index: 2;
		}
	}

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
}
    </style>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap-submenu.min.css">
        <script src="bootstrap/dist/js/bootstrap-submenu.min.js"></script>
    </head>
    <body>
        <div class="container">
        <ul class="nav navbar-nav pull-right">
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
  
        <div class="wrapper">
    <form class="form-signin">       
      <h2 class="form-signin-heading"> Login</h2>
      <input type="text" class="form-control" name="username" placeholder="Usuário" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Senha" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Lembre-me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div>
</div>

    </body>
</html>