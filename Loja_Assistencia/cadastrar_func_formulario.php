<?php include 'cabecalho.php';
?>
<div class="container">
    <div class="Principal">

        <title>Cadastrar Funcionário </title>

        <h1 >Cadastrar Funcionário</h1>


        <form method="post" action="xxxxxxxxx">

            <table class="table-condensed" width="80%" align="center">
                <tr>
                    <td>Nome:</td>
                    <td colspan="3"><input class="form-control" type="text" name="nome" size="60"/></td>       

                </tr>
                <tr class="form-inline form-group">
                    <td>RG:</td>
                    <td> <input class="form-control" type="text"  name="rg" /></td>
                    <td>CPF:</td>
                    <td colspan="3"> <input class="form-control" type="text" name="cpf" maxlength="11"/></td> 
                </tr>                                             
                <tr>

                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td> <input class="form-control" type="text" maxlength="11" height="5" name="telefone"/></td>                    
                </tr>
                <tr>
                    <td>Endereço:</td>
                    <td> <input class="form-control" type="text" name="endereço"/></td>                    
                </tr>
                <tr>
                    <td>CTPS:</td>
                    <td> <input class="form-control" type="text" name="ctps"/></td>                    
                </tr> 
                <tr>
                    <td>Data de Nascimento:</td>
                    <td> <input class="form-control" type="date" name="nascimento"/></td>                    
                </tr> 
                <tr>
                    <td>Data de Admissão:</td>
                    <td> <input class="form-control" type="date" name="admissao"/></td>                    
                </tr> 


                <tr>



                <tr>
                    <td></td>
                    <td> <input type="checkbox" name="usado" value="true">Ativo</td>                    
                </tr>  


                <tr>
                    <td colspan="4"> <input class="btn btn-primary pull-right" type="submit" value="Salvar"/></td>
                </tr>

            </table>






        </form>

    </div>
</div>
</body>
</html>
