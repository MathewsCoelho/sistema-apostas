<?php

require_once 'ConexaoDB.php';

class CavaloPDO{

private $tabela;
private $conn; 

    public function __construct() {
        try {
         $this->tabela = "aposta";
         $this->conn = ConexaoDB::getInstance();

         } catch (PDOException  $e) {
             print $e->getMessage();
         }
    }

    public function inserir($aposta) {
        try 
        {
            $stmt = $this->conn->prepare("INSERT INTO $this->tabela (data_aposta,id_usuario,id_etapa, ativo) VALUES (:data,:id_usuario,:id_etapa,:ativo)");
            $stmt->bindParam(':data', $cavalo->getData());
            $stmt->bindParam(':id_usuario', $cavalo->getUsuario());
            $stmt->bindParam(':id_etapa', $cavalo->getEtapa());
            $stmt->bindParam(':ativo', $cavalo->getAtivo());
            $stmt->execute();
            return $stmt;

        } catch (PDOException  $e)
        {
            print $e->getMessage(); 
        } 
    }
}