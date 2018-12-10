<?php

require_once 'ConexaoDB.php';

class ApostaPDO{

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
            $stmt = $this->conn->prepare("INSERT INTO $this->tabela (data_aposta,id_usuario,id_etapa, ativo, id_cavalo) VALUES (:data,:id_usuario,:id_etapa,:ativo,:cavalo)");
            $stmt->bindParam(':data', $aposta->getData());
            $stmt->bindParam(':id_usuario', $aposta->getUsuario());
            $stmt->bindParam(':id_etapa', $aposta->getEtapa());
            $stmt->bindParam(':ativo', $aposta->getAtivo());
            $stmt->bindParam(':cavalo', $aposta->getCavalo());
            $stmt->execute();
            return $stmt;

        } catch (PDOException  $e)
        {
            print $e->getMessage(); 
        } 
    }

    public function listar() {
        try{
             $sql = "SELECT usuario.nome, local, cavalo.nome as nome_cavalo FROM usuario JOIN aposta USING(id_usuario) JOIN etapa USING (id_etapa) JOIN cavalo USING(id_cavalo)";
             $resultado = $this->conn->query($sql);
             return $resultado;
        }catch
        (PDOException  $e) {
            print $e->getMessage();
        }       
    }

}