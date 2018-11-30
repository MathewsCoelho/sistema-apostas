<?php

require_once 'ConexaoDB.php';

class UsuarioPDO{

private $tabela;
private $conn; 

    public function __construct() {
        try {
         $this->tabela = "usuario";
         $this->conn = ConexaoDB::getInstance();

         } catch (PDOException  $e) {
             print $e->getMessage();
         }
    }

    public function inserir($usuario) {
        try 
        {
            $stmt = $this->conn->prepare("INSERT INTO $this->tabela (nome,email,senha,cpf,ativo, status) VALUES (:nome,:email,:senha,:cpf,:ativo,:status)");
            $stmt->bindValue(':nome', $usuario->getNome());
            $stmt->bindValue(':email', $usuario->getEmail());
            $stmt->bindValue(':senha', $usuario->getSenha());
            $stmt->bindValue(':cpf', $usuario->getCpf());
            $stmt->bindValue(':ativo', $usuario->getAtivo());
            $stmt->bindValue(':status', $usuario->getStatus());
            $stmt->execute();
            return $stmt;

        } catch (PDOException  $e)
        {
            print $e->getMessage(); 
        } 
    }

    public function entrar($usuario) {
        try 
        {
            $stmt = $this->conn->prepare("SELECT * FROM $this->tabela WHERE email = :email AND  senha = :senha");
            $stmt->bindValue(':email', $usuario->getEmail());
            $stmt->bindValue(':senha', $usuario->getSenha());
            $stmt->execute();
            return $stmt;

        } catch (PDOException  $e)
        {
            print $e->getMessage(); 
        } 
    }

    public function listar() {
    try{
         $sql = "SELECT * FROM $this->tabela WHERE ativo = 1";
         $resultado = $this->conn->query($sql);
         return $resultado;
    }catch
    (PDOException  $e) {
        print $e->getMessage();
    }       
    }

}