<?php

include_once "../model/usuario.php";
include_once "../pdo/UsuarioPDO.php";

$usuarioPDO = new UsuarioPDO();


if(isset($_POST['acao'])){
	$acao = $_POST['acao'];

	if($acao === 'Entrar'){
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		
		$usuario = new Usuario();
		$usuario->setEmail($email);
		$usuario->setSenha($senha);

		if($usuarioPDO->entrar($usuario)){
			echo 'Usuario Logado';
		}
	}

	else if($acao === 'Cadastrar'){
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$cpf = $_POST['cpf'];
		$nome = $_POST['nome'];

		$usuario = new Usuario();
		$usuario->setEmail($email);
		$usuario->setSenha($senha);
		$usuario->setCpf($cpf);
		$usuario->setNome($nome);
		if($usuarioPDO->inserir($usuario)){
			echo 'Usuario Cadastrado com Sucesso';
		}
	}
}

?>