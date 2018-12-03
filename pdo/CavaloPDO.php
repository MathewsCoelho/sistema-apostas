<?php

require_once 'ConexaoDB.php';

class CavaloPDO{

private $tabela;
private $conn; 

    public function __construct() {
        try {
         $this->tabela = "cavalo";
         $this->conn = ConexaoDB::getInstance();

         } catch (PDOException  $e) {
             print $e->getMessage();
         }
    }

    public function inserir($cavalo) {
        try 
        {
            $stmt = $this->conn->prepare("INSERT INTO $this->tabela (nome,numero,ativo) VALUES (:nome,:numero,:ativo)");
            $stmt->bindParam(':nome', $cavalo->getNome());
            $stmt->bindParam(':numero', $cavalo->getNumero());
            $stmt->bindParam(':ativo', $cavalo->getAtivo());
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

    public function excluir($id_cavalo) {
        try{
            $sql = "UPDATE $this->tabela SET ativo = 0 WHERE id_cavalo= '" . $id_cavalo . "' ";
            $retorno = $this->conn->query($sql);
            return $retorno;
        }catch
        (PDOException $e){
            print $e->getMessage();
        }        
    }

}