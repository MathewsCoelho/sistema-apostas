<?php

class Etapa{
    
    private $vencedor;
    private $local;
    private $ativo;

    function __construct() {
    }

    function getVencedor() {
        return $this->vencedor;
    }
    function getLocal() {
        return $this->local;
    }
    function getAtivo() {
        return $this->ativo;
    }
    function setVencedor() {
        $this->vencedor = $vencedor;
    }
    function setLocal() {
        $this->local = $local;
    }
    function setAtivo() {
        $this->ativo = $ativo;
    }
        
    public function __toString() {
        return "\Etapa[vencedor=$this->vencedor, local=$this->local, ativo=$this->ativo,  $this->__toString()]";
    }
}
