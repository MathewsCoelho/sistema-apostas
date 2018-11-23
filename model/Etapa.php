<?php

class Etapa{
    
    private $vencedor;
    private $local;

    function __construct() {
    }

    function getVencedor() {
        return $this->vencedor;
    }
    function setVencedor() {
        $this->vencedor = $vencedor;
    }

    function getLocal() {
        return $this->local;
    }
    function setLocal() {
        $this->local = $local;
    }
        
    public function __toString() {
        return "\Etapa[vencedor=$this->vencedor, local=$this->local,  $this->__toString()]";
    }
}
