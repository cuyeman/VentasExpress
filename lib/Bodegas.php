<?php

class Bodegas{
     
    private $idBodega;
    private $nombreBodega;
    private $stockBodega;
    
    
    
    function __construct($idBodega, $nombreBodega, $stockBodega) {
    $this->idBodega=$idBodega;
    $this->nombreBodega=$nombreBodega;
    $this->stockBodega=$stockBodega;
    }
    function getIdBodega() {
        return $this->idBodega;
    }

    function getNombreBodega() {
        return $this->nombreBodega;
    }

    function getStockBodega() {
        return $this->stockBodega;
    }

    function setIdBodega($idBodega) {
        $this->idBodega = $idBodega;
    }

    function setNombreBodega($nombreBodega) {
        $this->nombreBodega = $nombreBodega;
    }

    function setStockBodega($stockBodega) {
        $this->stockBodega = $stockBodega;
    }


        
        
        
}