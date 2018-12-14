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

    public function inserirCorredor($id_cavalo, $id_etapa) {
        try 
        {
            $stmt = $this->conn->prepare("INSERT INTO corredor (id_cavalo, id_etapa) VALUES (?, ?)");
            $stmt->bindValue(1, $id_cavalo);
            $stmt->bindValue(2, $id_etapa);
            $stmt->execute();
            return $stmt;
        } catch (PDOException  $e)
        {
            print $e->getMessage(); 
        } 
    }

    public function listar() {
        try{
             $sql = "SELECT * FROM $this->tabela WHERE ativo = 1 OR ativo = 2";
             $resultado = $this->conn->query($sql);
             return $resultado;
        }catch
        (PDOException  $e) {
            print $e->getMessage();
        }       
    }

    public function listarCorredores($id_etapa) {
        try{
             $sql = "SELECT nome, id_cavalo FROM cavalo JOIN corredor USING(id_cavalo) JOIN etapa USING(id_etapa) WHERE id_etapa = ($id_etapa)";
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

    public function editar($etapa) {
        try 
        {
            $stmt = $this->conn->prepare("UPDATE $this->tabela SET local = :local WHERE id_etapa = :id_etapa");
 
            $stmt->bindParam(':local', $etapa->getLocal());
            $stmt->bindParam(':id_etapa', $etapa->getId());
            $stmt->execute();
            return $stmt;

        } catch (PDOException  $e)
        {
            print $e->getMessage(); 
        } 
    }


    public function finalizarEtapa($etapa) {
        try{
             $stmt = $this->conn->prepare("UPDATE $this->tabela SET id_vencedor = :id_vencedor, ativo = 2 WHERE id_etapa = :id_etapa");
            $stmt->bindParam(':id_vencedor', $etapa->getVencedor());
            $stmt->bindParam(':id_etapa', $etapa->getId());
            $stmt->execute();
            return $stmt;
        }catch
        (PDOException  $e) {
            print $e->getMessage();
        }       
    }

}