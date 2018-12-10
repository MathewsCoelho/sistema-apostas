<?php

class Aposta{
    
    private $id_aposta;
    private $ativo;
    private $usuario;
    private $etapa;
    private $cavalo;
    private $data;

    function __construct() {
    }

    function getIdAposta() {
        return $this->id_aposta;
    }

    function getAtivo() {
        return $this->ativo;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getEtapa(){
        return $this->etapa;
    }

    function getData(){
        return $this->data;
    }
    function getCavalo(){
        return $this->cavalo;
    }

    function setIdAposta($id_aposta) {
        $this->id_aposta = $id_aposta;
    }
       
    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setEtapa($etapa) {
        $this->etapa = $etapa;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setCavalo($cavalo) {
        $this->cavalo = $cavalo;
    }

    public function __toString() {
        return "\Aposta[id_aposta=$this->id_aposta, ativo=$this->ativo, $this->__toString()]";
    }
}
