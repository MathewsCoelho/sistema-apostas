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
}

?>