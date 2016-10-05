<?php


class ordem_servico {
    private $id;
    private $cliente;
    private $serviço;
    private $peças;
    private $garantia;
    private $dataAber;
    private $dataFecha;
    private $subtotal;
    private $maoDesconto;
    private $subtotalMao;
    private $total;
    private $obs;
            
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

    function getDataAber() {
        return $this->dataAber;
    }

    function getDataFecha() {
        return $this->dataFecha;
    }

    function getSubtotal() {
        return $this->subtotal;
    }

    function getMaoDesconto() {
        return $this->maoDesconto;
    }

    function getSubtotalMao() {
        return $this->subtotalMao;
    }

    function getTotal() {
        return $this->total;
    }

    function getObs() {
        return $this->obs;
    }

    function setDataAber($dataAber) {
        $this->dataAber = $dataAber;
    }

    function setDataFecha($dataFecha) {
        $this->dataFecha = $dataFecha;
    }

    function setSubtotal($subtotal) {
        $this->subtotal = $subtotal;
    }

    function setMaoDesconto($maoDesconto) {
        $this->maoDesconto = $maoDesconto;
    }

    function setSubtotalMao($subtotalMao) {
        $this->subtotalMao = $subtotalMao;
    }

    function setTotal($total) {
        $this->total = $total;
    }

    function setObs($obs) {
        $this->obs = $obs;
    }


}
