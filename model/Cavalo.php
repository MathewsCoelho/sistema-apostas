<?php

class Cavalo{
    
    private $numero;

    function __construct() {
    }

    function getNumero() {
        return $this->numero;
    }

    function setNumero() {
        $this->numero = $numero;
    }
        
    public function __toString() {
        return "\Cavalo[numero=$this->numero, $this->__toString()]";
    }
}