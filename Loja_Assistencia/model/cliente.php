<?php


class cliente {
    private $nome;
    private $rg;
    private $endereço;
    private $dataCad;
    private $cpf;
    
    
    
    function getNome() {
        return $this->nome;
    }

    function getRg() {
        return $this->rg;
    }

    function getEndereço() {
        return $this->endereço;
    }

    function getDataCad() {
        return $this->dataCad;
    }

    function getCpf() {
        return $this->cpf;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setEndereço($endereço) {
        $this->endereço = $endereço;
    }

    function setDataCad($dataCad) {
        $this->dataCad = $dataCad;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }


}
