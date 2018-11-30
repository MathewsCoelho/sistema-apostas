
<?php

class Usuario {
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $senha;
    private $status;
    private $ativo;

    public function __construct() {
        
    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }
    function getCpf() {
        return $this->cpf;
    }
    function getEmail() {
        return $this->email;
    }
    function getSenha() {
        return $this->senha;
    }
    function getStatus() {
        return $this->status;
    }
    function getAtivo() {
        return $this->ativo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    function setEmail($email) {
        $this->email = $email;
    }
    function setSenha($senha) {
        $this->senha = $senha;
    }
    function setStatus($status) {
        $this->status = $status;
    }
    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }
        
    public function __toString() {
        return "\Usuario[id=$this->id, nome=$this->nome, cpf=$this->cpf, email=$this->email, senha=$this->senha, status=$this->status, ativo=$this->ativo, $this->__toString()]";
    }

}
