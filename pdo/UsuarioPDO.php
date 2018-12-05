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
            $stmt->bindParam(':nome', $usuario->getNome());
            $stmt->bindParam(':email', $usuario->getEmail());
            $stmt->bindParam(':senha', $usuario->getSenha());
            $stmt->bindParam(':cpf', $usuario->getCpf());
            $stmt->bindParam(':ativo', $usuario->getAtivo());
            $stmt->bindParam(':status', $usuario->getStatus());
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
            $stmt = $this->conn->prepare("SELECT * FROM $this->tabela WHERE email = :email AND senha = :senha");
            $stmt->bindParam(':email', $usuario->getEmail());
            $stmt->bindParam(':senha', $usuario->getSenha());
            $stmt->execute();
            $obj = $stmt->fetch(PDO::FETCH_ASSOC);
            return $obj;
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


    public function listarUsuario($id_usuario) {
        try{
             $sql = "SELECT * FROM $this->tabela WHERE id_usuario = $id_usuario";
             $resultado = $this->conn->query($sql);
             return $resultado;
        }catch
        (PDOException  $e) {
            print $e->getMessage();
        }       
    }

    public function excluir($id_usuario) {
        try{
            $sql = "UPDATE $this->tabela SET ativo = 0 WHERE id_usuario= '" . $id_usuario . "' ";
            $retorno = $this->conn->query($sql);
            return $retorno;
        }catch
        (PDOException $e){
            print $e->getMessage();
        }        
    }

}