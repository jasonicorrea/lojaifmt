<?php
include 'cabecalho.php';
?>
<html>

    <head>
        <meta charset="utf-8">
    </head>
    <body><center>
        <div class="container">
            <div class="Principal">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default" align="center">
                            <div class="panel-heading" >
                                <p>Pesquisar Ordem de Serviços</p>
                            </div>
                            <style type="text/css">
                                
table {
  border-collapse: collapse;
  width: 50em;
  border: 1px solid #666;
}
thead {
  background: #ccc url(http://www.devfuria.com.br/html-css/tabelas/bar.gif) repeat-x left center;
  border-top: 1px solid #a5a5a5;
  border-bottom: 1px solid #a5a5a5;
}
tr:hover {
  background-color:#3d80df;
  color: #fff;
}
thead tr:hover {
  background-color: transparent;
  color: inherit;
}
tr:nth-child(even) {
    background-color: #edf5ff;
}
th {
  font-weight: normal;
  text-align: left;
}
th, td {
  padding: 0.1em 1em;
}
                            </style>

                            <form method="post">

                                <label id="Status">
                                    <select name="Status">
                                        <option selected value="Status">Status</option>
                                        <option value="Aberta">Aberta</option>
                                        <option value="Fechada">Fechada</option>
                                        <option value="Aguardando">Aguardando</option>
                                    </select>
                                </label>

                                <label id="datIni">
                                    <input  type="date"/>
                                </label>

                                <label id="datFim">
                                    <input  type="date"/>
                                </label>

                                <label id="numeroOS" style="">
                                    <input  type="text" placeholder="Numero da O.S"/>
                                </label>

                                <label id="pesquisar">
                                    <input class="btn btn-primary" type="submit" value="Pesquisar"/>
                                </label>  

                            </form>
                            <form method="post">
                                <table width="80%" class="table-responsive" style="margin-top: 80px">
                                    <tr>
                                        <th class="tg-yw4l" class="form-control">Número da O.S</th>
                                        <th class="tg-yw4l" class="form-control">Status</th>
                                        <th class="tg-yw4l" class="form-control">Data Inicial</th>
                                        <th class="tg-yw4l" class="form-control">Data Final</th>
                                        <th class="tg-yw4l" class="form-control">Cliente</th>
                                        <th class="tg-yw4l" class="form-control">Peças</th>
                                        <th class="tg-yw4l" class="form-control">Garantia</th>
                                    </tr>
                                    <tr>
                                        <td class="tg-yw4l" class="form-control"></td>
                                        <td class="tg-yw4l" class="form-control"></td>
                                        <td class="tg-yw4l" class="form-control"></td>
                                        <td class="tg-yw4l" class="form-control"></td>
                                        <td class="tg-yw4l" class="form-control"></td>
                                        <td class="tg-yw4l" class="form-control"></td>
                                        <td class="tg-yw4l" class="form-control"></td>
                                    </tr>
                                    
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center></body>
</html>
