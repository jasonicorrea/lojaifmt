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
    private $id;
    private $login;
    private $senha;
    private $numero;
    private $bairro;
    private $cidade;
    private $uf;
    private $cargo;
            
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

    function getId() {
        return $this->id;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getNumero() {
        return $this->numero;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getUf() {
        return $this->uf;
    }

    function getCargo() {
        return $this->cargo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }




}
