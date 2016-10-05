<?php


class cliente {
    private $nome;
    private $rg;
    private $endereço;
    private $dataCad;
    private $cpf;
    private $foneMovel;
    private $id;
    private $numero;
    private $cidade;
    private $uf;
    private $foneFixo;
    private $email;
            
    
    
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
    
    function getFone() {
        return $this->fone;
    }

    function setFone($fone) {
        $this->fone = $fone;
    }

    function getFoneMovel() {
        return $this->foneMovel;
    }

    function getId() {
        return $this->id;
    }

    function getNumero() {
        return $this->numero;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getUf() {
        return $this->uf;
    }

    function getFoneFixo() {
        return $this->foneFixo;
    }

    function getEmail() {
        return $this->email;
    }

    function setFoneMovel($foneMovel) {
        $this->foneMovel = $foneMovel;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setFoneFixo($foneFixo) {
        $this->foneFixo = $foneFixo;
    }

    function setEmail($email) {
        $this->email = $email;
    }




}
