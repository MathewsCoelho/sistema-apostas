<?php

session_start();

include_once "../model/Cavalo.php";
include_once "../pdo/CavaloPDO.php";

$cavaloPDO = new CavaloPDO();


if(isset($_POST['acao'])){
	
	$acao = $_POST['acao'];
	
	if($acao === 'Cadastrar Cavalo'){
		$nome = $_POST['nome'];
		$numero = $_POST['numero'];
		$ativo = 1;

		$cavalo = new Cavalo();
		$cavalo->setNome($nome);
		$cavalo->setNumero($numero);
		$cavalo->setAtivo($ativo);
		if($cavaloPDO->inserir($cavalo)){
			echo "<script>alert('Cavalo cadastrado com sucesso!');</script>";
			echo '<script>window.location="../view/admin.php";</script>';
		}
		else{
			echo "<script>alert('Erro ao cadastrar, tente novamente!');</script>";
			echo '<script>window.location="../view/admin.php";</script>';
		}
	}

	else if($acao == "Listar Cavalos"){	
		$listar = $cavaloPDO->listar();
		include_once "../view/listaCavalos.php";
	}
}

if(isset($_GET['tag'])){
	$tag = $_GET['tag'];
	
	if($tag === 'Deletar'){
		$id_cavalo = $_GET['id_cavalo'];
	
		if($cavaloPDO->excluir($id_cavalo))
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
}

?>