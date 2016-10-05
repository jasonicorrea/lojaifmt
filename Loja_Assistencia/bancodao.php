<?php


class bancodao {
    
    private $conexao;
    
     function __construct($con) {
        $this->conexao=$con;
    }
    
    function insereProduto(Produto $prod) {
        $sql = "insert into produtos (prod_desc,prod_preco,prod_usado) values ('{$prod->getNome()}','{$prod->getPreco()}','{$prod->getDescricao()}','{$prod->getCategoria()->getId()}','{$prod->getUsado()}')";
        return mysqli_query($this->conexao, $sql);
    }    
    
}
