<?php

include_once "../Model/Usuario.php";
include_once "../pdo/UsuarioPDO.php";

$usuarioDAO = new usuarioDAO();

if(isset($_POST['acao'])){
	$acao = $_POST['acao'];
	echo $acao;
	if($acao = 'Entrar'){
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		
		$usuario = new Usuario();
		$usuario->setEmail($email);
		$usuario->setSenha($senha);

		if($usuarioDAO->entrar($usuario)){
			echo 'Cadastrou';
		}
	}

	else if($acao = 'Cadastrar'){
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$cpf = $_POST['cpf'];
		$nome = $_POST['nome'];

		$usuario = new Usuario();
		$usuario->setEmail($email);
		$usuario->setSenha($senha);
		$usuario->setCpf($cpf);
		$usuario->setNome($nome);
		$usuarioDAO->inserir($usuario);
	}
}

?>