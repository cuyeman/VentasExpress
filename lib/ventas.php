<?php

class venta{
    private $idVenta;
    private $nroBoleta;
    private $valor;
    private $fechaBoleta;
    private $detalle;
    
    function __construct($idVenta, $nroBoleta, $valor, $fechaBoleta, $detalle) {
        $this->idVenta = $idVenta;
        $this->nroBoleta = $nroBoleta;
        $this->valor = $valor;
        $this->fechaBoleta = $fechaBoleta;
        $this->detalle = $detalle;
    }

    function getIdVenta() {
        return $this->idVenta;
    }

    function getNroBoleta() {
        return $this->nroBoleta;
    }

    function getValor() {
        return $this->valor;
    }

    function getFechaBoleta() {
        return $this->fechaBoleta;
    }

    function getDetalle() {
        return $this->detalle;
    }

    function setIdProducto($idVenta) {
        $this->idVenta = $idVenta;
    }

    function setNombre($nroBoleta) {
        $this->nroBoleta = $nroBoleta;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setFechaBoleta($fechaBoleta) {
        $this->fechaBoleta = $fechaBoleta;
    }


    function setDetalle($detalle) {
        $this->detalle = $detalle;
    }

    
    
    


    
}