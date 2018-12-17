<?php

require_once 'ConexaoDB.php';

class RankingPDO{

private $tabela;
private $conn; 

    public function __construct() {
        try {
         $this->tabela = "ranking";
         $this->conn = ConexaoDB::getInstance();

         } catch (PDOException  $e) {
             print $e->getMessage();
         }
    }

    public function inserir($id_usuario) {
        try 
        {
            $stmt = $this->conn->prepare("INSERT INTO $this->tabela (id_usuario, pontos) VALUES (?, 0)");
            $stmt->bindValue(1, $id_usuario);
            $stmt->execute();
            return $stmt;

        } catch (PDOException  $e)
        {
            print $e->getMessage(); 
        } 
    }

    public function listarRanking($id_usuario) {
        try{
             $sql = "SELECT * FROM $this->tabela JOIN usuario USING(id_usuario) WHERE id_usuario = $id_usuario";
             $resultado = $this->conn->query($sql);
             return $resultado;
        }catch
        (PDOException  $e) {
            print $e->getMessage();
        }       
    }

    public function listar() {
        try{
             $sql = "SELECT * FROM $this->tabela JOIN usuario USING(id_usuario) WHERE ativo = 1";
             $resultado = $this->conn->query($sql);
             return $resultado;
        }catch
        (PDOException  $e) {
            print $e->getMessage();
        }       
    }

    public function pesquisar($nome) {
        try{
            $sql = "SELECT * FROM $this->tabela JOIN usuario USING(id_usuario) WHERE nome LIKE '$nome%'";
             $resultado = $this->conn->query($sql);
             return $resultado;
        }catch
        (PDOException  $e) {
            print $e->getMessage();
        }       
    }

    public function editar($ranking) {
        try 
        {
            $stmt = $this->conn->prepare("UPDATE $this->tabela SET pontos = :pontos WHERE id_usuario = :id_usuario");
            $stmt->bindParam(':pontos', $ranking->getPontos());
           $stmt->bindParam(':id_usuario', $ranking->getUsuario());
            $stmt->execute();
            return $stmt;

        } catch (PDOException  $e)
        {
            print $e->getMessage(); 
        } 
    }
}