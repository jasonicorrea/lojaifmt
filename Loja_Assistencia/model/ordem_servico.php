<?php


class ordem_servico {
    private $id;
    private $cliente;
    private $serviço;
    private $peças;
    private $garantia;
    
    function getId() {
        return $this->id;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getServiço() {
        return $this->serviço;
    }

    function getPeças() {
        return $this->peças;
    }

    function getGarantia() {
        return $this->garantia;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setServiço($serviço) {
        $this->serviço = $serviço;
    }

    function setPeças($peças) {
        $this->peças = $peças;
    }

    function setGarantia($garantia) {
        $this->garantia = $garantia;
    }


}
