<?php

class Aposta{
    
    private $id_aposta;

    function __construct() {
    }

    function getidAposta() {
        return $this->id_aposta;
    }

    function getidAposta() {
        $this->id_aposta = $id_aposta;
    }
        
    public function __toString() {
        return "\Aposta[id_aposta=$this->id_aposta, $this->__toString()]";
    }
}
