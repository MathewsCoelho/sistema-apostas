<?php

class Cavalo{
    
    private $numero;
    private $ativo;

    function __construct() {
    }

    function getNumero() {
        return $this->numero;
    }

    function setNumero() {
        $this->numero = $numero;
    }
        
    public function __toString() {
        return "\Cavalo[numero=$this->numero, ativo=$this->ativo, $this->__toString()]";
    }
}
