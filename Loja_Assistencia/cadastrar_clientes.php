<?php include 'cabecalho.php';       
?>
       <div class="container">
    <div class="Principal">
        
        <title> Cadastrar Cliente </title>
        
        <h1>Cadastrar Cliente</h1>
    
     
        <form method="post" action="xxxxxxxxx">
        
            <table class="table-condensed" align="center">
                <tr>
                    <td>Nome:</td>
                    <td colspan="3"><input class="form-control" type="text" name="nome" size="60"/></td>       
                  
                </tr>
                <tr>
                    <td>RG:</td>
                    <td> <input class="form-control" type="text"  name="rg" /></td>
                     <td>CPF:</td>
                     <td> <input class="form-control" type="text" name="cpf" /></td> 
                </tr>                                             
                <tr>
                                      
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td> <input class="form-control" type="text" name="telefone"/></td>                    
                </tr>
                <tr>
                    <td>Endereço:</td>
                    <td> <input class="form-control" type="text" name="endereço"/></td>                    
                </tr>
                <tr>
                    <td>Data de Cadastro:</td>
                    <td> <input class="form-control" type="date" name="nascimento"/></td>                    
                </tr>  
                <tr>
                    <td> <input class="btn btn-primary" type="submit" value="Cadastrar"/></td>
                </tr>
                
            </table>    
    </form>
        
        </div>
    </div>
    </body>
</html>