<?php

session_start();

include_once "../model/Aposta.php";
include_once "../pdo/ApostaPDO.php";

$apostaPDO = new ApostaPDO();

if(isset($_POST['acao'])){
	$acao = $_POST['acao'];
	if($acao === 'Cadastrar Aposta'){
		$numero = $_POST['numero'];
		$id_etapa = $_POST['id_etapa'];
		$id_usuario = $_SESSION['id'];
		$data = date('y/m/d');
		$ativo = 1;
		$etapa = new Aposta();

		$etapa->setData($data);
		$etapa->setUsuario($id_usuario);
		$etapa->setEtapa($id_etapa);
		$etapa->setAtivo($ativo);
		$etapa->setEtapa($id_etapa);
		if($apostaPDO->inserir($etapa)){
			echo "<script>alert('Etapa cadastrada com sucesso!');</script>";
			echo '<script>window.location="../view/inicial.php";</script>';
		}
		else{
			echo "<script>alert('Erro ao cadastar etapa, tente novamente!');</script>";
			echo '<script>window.location="../view/index.php";</script>';
		}
	}
}

?>