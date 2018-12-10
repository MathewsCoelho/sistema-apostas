<?php

session_start();

include_once "../model/Etapa.php";
include_once "../pdo/EtapaPDO.php";
include_once "../pdo/CavaloPDO.php";

$etapaPDO = new EtapaPDO();
$cavaloPDO = new CavaloPDO();

if(isset($_POST['acao'])){
	$acao = $_POST['acao'];

	if($acao === 'Cadastrar'){
		$local = $_POST['local'];
		$ativo = 1;
				
		$etapa = new Etapa();
		$etapa->setLocal($local);
		$etapa->setAtivo($ativo);
		if($etapaPDO->inserir($etapa)){
			echo "<script>alert('Etapa cadastrada com sucesso!');</script>";
			echo '<script>window.location="../view/admin.php";</script>';
		}
		else{
			echo "<script>alert('Erro ao cadastar etapa, tente novamente!');</script>";
			echo '<script>window.location="../view/admin.php";</script>';
		}
	}
	else if($acao == "Listar Etapas"){	
		$listar = $etapaPDO->listar();
		include_once "../view/listaEtapas.php";
	}

	else if($acao == "Cadastrar Corredor"){
		$id_cavalo = $_POST['cavalo'];
		$id_etapa = $_POST['id_etapa'];
		if($etapaPDO->inserirCorredor($id_cavalo, $id_etapa)){
			echo "<script>alert('Corredor cadastrado com sucesso!');</script>";
			echo '<script>window.location="../view/admin.php";</script>';
		}
		else{
			echo "<script>alert('Erro ao cadastar corredor, tente novamente!');</script>";
			echo '<script>window.location="../view/admin.php";</script>';
		}
	}

	else if($acao == "Finalizar Etapa"){
		$id_cavalo = $_POST['cavalo'];
		$id_etapa = $_POST['id_etapa'];
		$etapa = new Etapa();
		$etapa->setVencedor($id_cavalo);
		$etapa->setId($id_etapa);
		if($etapaPDO->finalizarEtapa($etapa)){
			echo "<script>alert('Etapa finalizada com sucesso!');</script>";
			echo '<script>window.location="../view/admin.php";</script>';
		}
		else{
			echo "<script>alert('Erro ao finalizar etapa, tente novamente!');</script>";
			echo '<script>window.location="../view/admin.php";</script>';
		}
	}

	else if($acao === 'Editar Etapa'){
		$local = $_POST['local'];
		$id_etapa = $_POST['id_etapa'];
		$etapa = new Etapa();
		$etapa->setLocal($local);
		$etapa->setId($id_etapa);
		if($etapaPDO->editar($etapa)){
			echo "<script>alert('Etapa editada com sucesso!');</script>";
			echo '<script>window.location="../view/admin.php";</script>';
		}
		else{
			echo "<script>alert('Erro ao editar etapa, tente novamente!');</script>";
			echo '<script>window.location="../view/admin.php";</script>';
		}
	}

}

if(isset($_GET['tag'])){
	$tag = $_GET['tag'];
	if($tag === "Visualizar"){	
		$id_etapa = $_GET['id_etapa'];
		$listar = $etapaPDO->listarEtapa($id_etapa);
		$listarCorredores = $etapaPDO->listarCorredores($id_etapa);
		$listarCorredor = $etapaPDO->listarCorredores($id_etapa);
		if($_SESSION['tipo'] === '2'){
			$listarCavalo = $cavaloPDO->listar();
			include_once "../view/etapaAdmin.php";
		}
		else{
			include_once "../view/etapa.php";
		}
	}

	else if($tag === "Editar"){	
		$id_etapa = $_GET['id_etapa'];
		$listar = $etapaPDO->listarEtapa($id_etapa);
		include_once "../view/editaEtapa.php";
	}

	else if($tag === "Deletar"){	
		$id_etapa = $_GET['id_etapa'];
	
		if($etapaPDO->excluir($id_etapa))
		{
			echo "<script>alert('Excluida com sucesso!');</script>";
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