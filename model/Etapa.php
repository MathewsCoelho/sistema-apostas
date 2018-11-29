<?php

class Etapa{
    
    private $vencedor;
    private $local;

    function __construct() {
    }

    function getVencedor() {
        return $this->vencedor;
    }
    function getLocal() {
        return $this->local;
    }
    function setVencedor() {
        $this->vencedor = $vencedor;
    }
    function setLocal() {
        $this->local = $local;
    }
        
    public function __toString() {
        return "\Etapa[vencedor=$this->vencedor, local=$this->local,  $this->__toString()]";
    }
}
