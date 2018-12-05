<?php

session_start();

include_once "../model/Usuario.php";
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
		$login = $usuarioPDO->entrar($usuario);

		if($login){
			$_SESSION['nome'] = $login['nome'];
			$_SESSION['id'] = $login['id_usuario'];
			$_SESSION['tipo'] = $login['status'];
			echo "<script>alert('Logado com sucesso!');</script>";

			if($_SESSION['tipo'] === '2'){
				echo '<script>window.location="../view/admin.php";</script>';
			}	
			else{		
				echo '<script>window.location="../view/inicial.php";</script>';
			}
		}
		else{
			echo "<script>alert('Erro ao logar, tente novamente!');</script>";
			echo '<script>window.location="../view/index.php";</script>';
		}
	}

	else if($acao === 'Cadastrar'){
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$cpf = $_POST['cpf'];
		$nome = $_POST['nome'];
		$ativo = 1;
		$status = 1;

		$usuario = new Usuario();
		$usuario->setEmail($email);
		$usuario->setSenha($senha);
		$usuario->setCpf($cpf);
		$usuario->setNome($nome);
		$usuario->setAtivo($ativo);
		$usuario->setStatus($status);
		if($usuarioPDO->inserir($usuario)){
			echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
			echo '<script>window.location="../view/index.php";</script>';
		}
		else{
			echo "<script>alert('Erro ao cadastrar, tente novamente!');</script>";
			echo '<script>window.location="../view/index.php";</script>';
		}
	}

	else if($acao == "Listar Usuarios"){	
		$listar = $usuarioPDO->listar();
		include_once "../view/listaUsuarios.php";
	}
}

if(isset($_GET['tag'])){
	$tag = $_GET['tag'];
	
	if($tag === 'Deletar'){
		$id_usuario = $_GET['id_usuario'];
	
		if($usuarioPDO->excluir($id_usuario))
		{
			echo "<script>alert('Excluido com sucesso!');</script>";
			echo '<script>window.location="../view/admin.php";</script>';
		}
		else
		{
			echo "<script>alert('Falha ao excluir!');</script>";
			echo '<script>window.location="../view/admin.php";</script>';
		}
	}

	else if($tag === "Editar"){	
		$id_usuario = $_GET['id_usuario'];
		$listar = $usuarioPDO->listarUsuario($id_usuario);
		include_once "../view/editaUsuario.php";
	}
}


?>