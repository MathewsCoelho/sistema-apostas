<?php

class Corredor{
    private $id_corredor;
    private $cavalo;
    private $etapa;

    public function __construct() {
    }

    function getIdCorredor(){
        return $this->id_corredor;
    }
    function getCavalo() {
        return $this->cavalo;
    }
    function getEtapa() {
        return $this->etapa;
    }

    function setIdCorredor($id_corredor) {
        $this->id_corredor = $id_corredor;
    }
    function setVencedor($cavalo) {
        $this->cavalo = $cavalo;
    }
    function setLocal($etapa) {
        $this->etapa = $etapa;
    }

        
    public function __toString() {
        return "\Corredor[cavalo=$this->cavalo, etapa=$this->etapa, $this->__toString()]";
    }
}
