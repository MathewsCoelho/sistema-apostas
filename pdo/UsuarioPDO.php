<?php
require_once 'ConexaoDB.php';

class UsuarioDAO extends ConexaoDB{

private $tabela;
private $conn; 

public function __construct() {
    try {
     parent::__construct();
     $this->tabela = "usuario";
     $this->BD = new BD();

     } catch (PDOException  $e) {
         print $e->getMessage();
     }
}

public function inserir($usuario) {

    try {
        $usuario->getEmail($email);
        $usuario->getSenha($senha);
        $usuario->getCpf($cpf);
        $usuario->getNome($nome);

        $stmt = $this->BD->pdo->prepare("INSERT INTO $this->tabela (nome,email,senha,cpf) VALUES (:nome,:email,:senha,:cpf)");

        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':senha', $senha);
        $stmt->bindValue(':cpf', $cpf);
        $stmt->execute();
        return $stmt;

    } catch (PDOException  $e)
    {
        print $e->getMessage(); 
    } 
}
