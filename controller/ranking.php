<?php

session_start();


include_once "../model/Ranking.php";
include_once "../pdo/RankingPDO.php";

$rankingPDO = new RankingPDO();
	
if(isset($_POST['acao'])){
	$acao = $_POST['acao'];

	if($acao == "Listar Ranking"){	
		$listar = $rankingPDO->listar();
		include_once "../view/listaRanking.php";
	}

	else if($acao === 'Editar Ranking'){
		$pontos = $_POST['pontos'];
		$id_usuario = $_POST['id_usuario'];
		$ranking = new Ranking();
		$ranking->setPontos($pontos);
		$ranking->setUsuario($id_usuario);
		if($rankingPDO->editar($ranking)){
			echo "<script>alert('Pontuação editada com sucesso!');</script>";
			echo '<script>window.location="../view/admin.php";</script>';
		}
		else{
			echo "<script>alert('Erro ao editar pontuação, tente novamente!');</script>";
			echo '<script>window.location="../view/admin.php";</script>';
		}
	}
}

if(isset($_GET['tag'])){
	$tag = $_GET['tag'];
	if($tag === "Editar"){	
		$id_usuario = $_GET['id_usuario'];
		$listar = $rankingPDO->listarRanking($id_usuario);
		include_once "../view/editaRanking.php";
	}
}



?>