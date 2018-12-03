<?php

require_once 'ConexaoDB.php';

class EtapaPDO{

private $tabela;
private $conn; 

    public function __construct() {
        try {
         $this->tabela = "etapa";
         $this->conn = ConexaoDB::getInstance();

         } catch (PDOException  $e) {
             print $e->getMessage();
         }
    }

    public function inserir($etapa) {
        try 
        {
            $stmt = $this->conn->prepare("INSERT INTO $this->tabela (local, ativo) VALUES (:local, :ativo)");
            $stmt->bindValue(':local', $etapa->getLocal());
            $stmt->bindValue(':ativo', $etapa->getAtivo());
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

    public function listarEtapa($id_etapa) {
        try{
             $sql = "SELECT * FROM $this->tabela WHERE id_etapa = $id_etapa";
             $resultado = $this->conn->query($sql);
             return $resultado;
        }catch
        (PDOException  $e) {
            print $e->getMessage();
        }       
    }

    public function excluir($id_etapa) {
        try{
            $sql = "UPDATE $this->tabela SET ativo = 0 WHERE id_etapa= '" . $id_etapa . "' ";
            $retorno = $this->conn->query($sql);
            return $retorno;
        }catch
        (PDOException $e){
            print $e->getMessage();
        }        
    }

}