<?php include 'cabecalho.php';
?>
<div class="container">
<div class="Principal">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default" align="center">
                <div class="panel-heading" >

        <title>Cadastrar Funcionário </title>

        <h1 >Cadastrar Funcionário</h1>


        <form method="post" action="xxxxxxxxx">

            <table class="table-condensed" width="80%" align="center">
                <tr>
                    <td>Nome:</td>
                    <td colspan="3"><input class="form-control" type="text" name="nome" /></td>
                    <td>Cargo:</td>
                    <td><input class="form-control" type="text" name="cargo" /></td>       


                </tr>
                <tr class="form-inline form-group">
                    <td>RG:</td>
                    <td> <input class="form-control" type="text"  name="rg" /></td>
                    <td>CPF:</td>
                    <td> <input class="form-control" type="text" name="cpf" maxlength="11"/></td> 
                </tr>                                             
                <tr>

                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td> <input class="form-control" type="text" maxlength="11" height="5" name="telefone"/></td>                    
                </tr>
                <tr>
                    <td>Endereço:</td>
                    <td colspan="3"> <input class="form-control" type="text" name="endereço"/></td>
                    <td>Numero:</td>
                    <td> <input class="form-control" type="text" name="numero" maxlength=5/></td> 
                </tr>
                <tr>
                    <td>Bairro:</td>
                    <td> <input class="form-control" type="text" name="bairro"/></td>
                    <td>Cidade:</td>
                    <td> <input class="form-control" type="text" name="cidade" maxlength=5/></td> 
                    <td>UF:</td>
                    <td> <input class="form-control" type="text" name="uf" maxlength=5/></td> 
                </tr>
                <tr>
                    <td>CTPS:</td>
                    <td colspan="2"> <input class="form-control" type="text" name="ctps"/></td>
                    <td>Data de Nascimento:</td>
                    <td colspan="2"> <input class="form-control" type="date" name="nascimento"/></td>
                </tr> 
               
                

                <tr>
                     <td>Data de Admissão:</td>
                     <td > <input class="form-control" type="date" name="admissao"/></td>                    
                    <td>Login:</td>
                    <td> <input class="form-control" type="text" name="login"/></td>
                    <td>Senha:</td>
                    <td> <input class="form-control" type="text" name="senha" maxlength=5/></td> 
                </tr>



                <tr>
                    <td></td>
                    <td> <input type="checkbox" name="usado" value="true">Ativo</td>                    
                </tr>  


                <tr>
                    <td colspan="6"> <input class="btn btn-primary pull-right" type="submit" value="Salvar"/></td>
                </tr>

            </table >






            </form>
          </div>
        </div>
       </div>
    </div>
</div>
</body>
</html>
