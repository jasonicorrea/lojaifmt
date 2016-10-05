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


                    <form method="get" action="relatorios.php">

                        <table class="table-condensed" width="80%" align="center">

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
                                <td>Data de abertura:</td>
                                <td> <input class="form-control" type="date" name="abertura"/></td>   
                            <tr>
                                <td>Peças:</td>
                                <td><input type="checkbox" name="pcs" value="tue"></td>
                                </td>
                            </tr>  

                            </tr>
                            <tr>
                                <td>Garantia:</td>
                                <td><input type="checkbox" name="status" value="tue"></td>
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
