<?php
  include 'cabecalho.php';
?>
<html>
     
<head>
    <meta charset="utf-8">
<title>www.consertacel.com</title>
</head>
<body><center>
    <p><h1>Pesquisar Ordem de Serviços</h1></p>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:11px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:11px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-yw4l{vertical-align:top}
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
<table class="tg" class="table-responsive">
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
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
  </tr>
</table></div>
</div>
</form>
</center></body>
</html>
