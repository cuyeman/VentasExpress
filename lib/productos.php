<?php

class productos{
    private $idProducto;
    private $nombre;
    private $tipo;
    private $fechaVencimiento;
    private $valor;
    private $comentario;
    
    function __construct($idProducto, $nombre, $tipo, $fechaVencimiento, $valor, $comentario) {
        $this->idProducto = $idProducto;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->fechaVencimiento = $fechaVencimiento;
        $this->valor = $valor;
        $this->comentario = $comentario;
    }

    function getIdProducto() {
        return $this->idProducto;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getFechaVencimiento() {
        return $this->fechaVencimiento;
    }

    function getValor() {
        return $this->valor;
    }

    function getComentario() {
        return $this->comentario;
    }

    function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setFechaVencimiento($fechaVencimiento) {
        $this->fechaVencimiento = $fechaVencimiento;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setComentario($comentario) {
        $this->comentario = $comentario;
    }

    
    
    


    
}