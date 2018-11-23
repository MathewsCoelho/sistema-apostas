<?php

class Apostador extends Usuario{
    
    private $pontuacao;

    function __construct() {
    }

    function getPontuacao() {
        return $this->pontuacao;
    }
    function setPontuacao() {
        $this->pontuacao = $pontuacao;
    }
        
    public function __toString() {
        return "\Apostador[id=$this->id, nome=$this->nome, cpf=$this->cpf, email=$this->email, senha=$this->senha, status=$this->status, pontuação=$this->pontuacao, $this->__toString()]";
    }
}
