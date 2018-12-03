<?php

class Ranking{
    
    private $pontos;
    private $usuario;

    function __construct() {
    }

    function getPontos() {
        return $this->pontos;
    }
    function setPontos($pontos) {
        $this->pontos = $pontos;
    }

    function getUsuario() {
        return $this->usuario;
    }
    function setUsuario($pontos) {
        $this->usuario = $usuario;
    }
        
    public function __toString() {
        return "\Ranking[pontos=$this->pontos,  $this->__toString()]";
    }
}
