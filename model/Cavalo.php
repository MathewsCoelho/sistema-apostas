<?php

class Cavalo{
    
    private $numero;
    private $ativo;
    private $nome;

    function __construct() {
    }

    function getNumero() {
        return $this->numero;
    }
    function getAtivo() {
        return $this->ativo;
    }
    function getNome() {
        return $this->nome;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }
    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
        
    public function __toString() {
        return "\Cavalo[numero=$this->numero, ativo=$this->ativo, nome=$this->nome, $this->__toString()]";
    }
}
