<?php


class funcionario {
    private $nome;
    private $cpf;
    private  $rg;
    private $telefone;
    private $endereço;
    private $ctps;
    private $dataNasc;
    private $dataAdmi;
    private $ativo;
    
    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getRg() {
        return $this->rg;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEndereço() {
        return $this->endereço;
    }

    function getCtps() {
        return $this->ctps;
    }

    function getDataNasc() {
        return $this->dataNasc;
    }

    function getDataAdmi() {
        return $this->dataAdmi;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEndereço($endereço) {
        $this->endereço = $endereço;
    }

    function setCtps($ctps) {
        $this->ctps = $ctps;
    }

    function setDataNasc($dataNasc) {
        $this->dataNasc = $dataNasc;
    }

    function setDataAdmi($dataAdmi) {
        $this->dataAdmi = $dataAdmi;
    }
    
    function getAtivo() {
        return $this->ativo;
    }

    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }




}
