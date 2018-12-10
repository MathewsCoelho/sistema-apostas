<?php


class Etapa{
    private $id;
    private $vencedor;
    private $local;
    private $ativo;
    private $cavalo;

    public function __construct() {
    }

    function getId() {
        return $this->id;
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
    function setId($id) {
        $this->id = $id;
    }
    function setVencedor($vencedor) {
        $this->vencedor = $vencedor;
    }
    function setLocal($local) {
        $this->local = $local;
    }
    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }
        
    public function __toString() {
        return "\Etapa[vencedor=$this->vencedor, local=$this->local, ativo=$this->ativo,  $this->__toString()]";
    }
}
