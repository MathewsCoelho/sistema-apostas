<?php

class Aposta{
    
    private $id_aposta;
    private $ativo;

    function __construct() {
    }

    function getidAposta() {
        return $this->id_aposta;
    }

    function getAtivo() {
        return $this->ativo;
    }

    function setidAposta() {
        $this->id_aposta = $id_aposta;
    }
       
    function setAtivo() {
        $this->ativo = $ativo;
    }

    public function __toString() {
        return "\Aposta[id_aposta=$this->id_aposta, ativo=$this->ativo, $this->__toString()]";
    }
}
