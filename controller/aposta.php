<?php

session_start();

include_once "../model/Aposta.php";
include_once "../pdo/ApostaPDO.php";

$apostaPDO = new ApostaPDO();

if(isset($_POST['acao'])){
	$acao = $_POST['acao'];
	if($acao === 'Cadastrar Aposta'){
		$id_cavalo = $_POST['corredor'];
		$id_etapa = $_POST['id_etapa'];
		$id_usuario = $_SESSION['id'];
		$data = date('Y-m-d');
		$ativo = 1;
		$aposta = new Aposta();
		$aposta->setData($data);
		$aposta->setUsuario($id_usuario);
		$aposta->setEtapa($id_etapa);
		$aposta->setAtivo($ativo);
		$aposta->setCavalo($id_cavalo);

		if($apostaPDO->inserir($aposta)){
			echo "<script>alert('Aposta feita com sucesso!');</script>";
			echo '<script>window.location="../view/inicial.php";</script>';
		}
		else{
			echo "<script>alert('Erro ao realizar aposta, tente novamente!');</script>";
			echo '<script>window.location="../view/index.php";</script>';
		}
	}

	else if($acao == "Listar Apostas"){	
		$listar = $apostaPDO->listar();
		include_once "../view/listaApostas.php";
	}
}

?>