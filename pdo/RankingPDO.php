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

    public function listar() {
        try{
             $sql = "SELECT * FROM $this->tabela JOIN usuario USING(id_usuario)";
             $resultado = $this->conn->query($sql);
             return $resultado;
        }catch
        (PDOException  $e) {
            print $e->getMessage();
        }       
    }
}