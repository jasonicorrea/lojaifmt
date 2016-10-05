<?php


class bancodao {
    
    private $conexao;
    
     function __construct($con) {
        $this->conexao=$con;
    }
    
    function insereCli(cliente $cli) {
        $sql = "insert into cli (cli_nome,"
                . "cli_cpf,"
                . "cli_rg,"
                . "cli_end_log,"
                . "cli_end_num,"
                . "cli_end_bairro,"
                . "cli_end_cidade,"
                . "cli_end_uf,"
                . "cli_telmovel,"
                . "cli_telfixo,"
                . "cli_email,"
                . "cli_dtacad) "
                . "values ('{$cli->getNome()}',"
                . "'{$cli->getCpf()}',"
                . "'{$cli->getRg()}',"
                . "'{$cli->getEndereço()},'"
                . "'{$cli->getNumero()}',"
                . "'{$cli->getBairro()}',"
                . "'{$cli->getCidade()}',"
                . "'{$cli->getUf()}',"
                . "'{$cli->getFoneMovel()}',"
                . "'{$cli->getFoneFixo()}',"
                . "'{$cli->getEmail()}',"
                . "'{$cli->getDataCad()}')";
                
        return mysqli_query($this->conexao, $sql);
    }    
    
    
    
}
