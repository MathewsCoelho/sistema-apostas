<?php

require_once 'ConexaoDB.php';
include_once "RankingPDO.php";

class UsuarioPDO{

private $tabela;
private $RankingPDO;
private $conn; 

    public function __construct() {
        try {
         $this->tabela = "usuario";
         $this->conn = ConexaoDB::getInstance();
         $this->rankingPDO = new RankingPDO();

         } catch (PDOException  $e) {
             print $e->getMessage();
         }
    }

    public function inserir($usuario) {
        try 
        {
            $this->conn->beginTransaction();
            $stmt = $this->conn->prepare("INSERT INTO $this->tabela (nome,email,senha,cpf,ativo, status) VALUES (:nome,:email,:senha,:cpf,:ativo,:status)");
            $stmt->bindParam(':nome', $usuario->getNome());
            $stmt->bindParam(':email', $usuario->getEmail());
            $stmt->bindParam(':senha', $usuario->getSenha());
            $stmt->bindParam(':cpf', $usuario->getCpf());
            $stmt->bindParam(':ativo', $usuario->getAtivo());
            $stmt->bindParam(':status', $usuario->getStatus());
            if($stmt->execute()){
                $id_usuario = $this->conn->lastInsertId();
                $this->rankingPDO->inserir($id_usuario);
            }
            if($this->conn->commit()){ 
                return true;
            }
            return false;

        } catch (PDOException  $e)
        {
            print $e->getMessage(); 
            $this->conn->rollBack();
            return false;
        } 
    }

    public function editar($usuario) {
        try 
        {
            $stmt = $this->conn->prepare("UPDATE $this->tabela SET nome = :nome, email = :email, senha =:senha, cpf = :cpf WHERE id_usuario = :id");
 
            $stmt->bindParam(':nome', $usuario->getNome());
            $stmt->bindParam(':email', $usuario->getEmail());
            $stmt->bindParam(':senha', $usuario->getSenha());
            $stmt->bindParam(':cpf', $usuario->getCpf());
            $stmt->bindParam(':id', $usuario->getId());
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

    public function pesquisar($nome) {
        try{
             $sql = "SELECT * FROM $this->tabela WHERE nome LIKE '$nome%'";
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