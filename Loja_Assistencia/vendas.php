<?php include 'cabecalho.php';
?>
<div class="container">
    <div class="Principal">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default" align="center">
                    <div class="panel-heading" >
                        <head>
                            <meta charset="utf-8">
                            <title>www.consertacel.com</title>
                        </head>
                    </div>

                    <h1>Cadastrar Ordem de Serviço</h1>


                    <form method="post" action="xxxxxxxxx">

                        <table class="table-condensed" width="80%" align="center">
                            <tr>
                                <td>Número da O.S:</td>
                                <td><input class="form-control" type="text" name="os"/></td> 
                            </tr>
                            <tr>

                                <td>Cliente:</td>
                                <td> <input class="form-control" type="text" name="cli" /></td> 
                            </tr>                                             
                            <tr>

                            </tr>
                            <tr>
                                <td>Serviço:</td>
                                <td> <input class="form-control" type="text" name="obs"/></td>                    
                            </tr>
                            <tr>
                                <td>Peças:</td>
                                <td> <input class="form-control" type="text" name="pçs"/></td>                    
                                <td> <select class="form-control" name="status">                                
                                        <option value="1">NÃO</option>                                 
                                        <option value="1">NOVA</option>                                 
                                        <option value="2">USADA</option>                                                                         
                                    </select>
                                </td>

                            </tr>
                            <tr>
                                <td>Garantia:</td>
                                <td> <input class="form-control" type="text" name="garantia"/></td>                    

                                <td> <select class="form-control" name="status">                                
                                        <option value="1">SIM</option>                                 
                                        <option value="2">NÃO</option>                                                                         
                                    </select>
                                </td>

                            </tr>  

                            <tr>
                                <td colspan="4"><input class="btn btn-primary pull-right"   type="submit" value="Cadastrar"/></td>
                            </tr>

                        </table> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
