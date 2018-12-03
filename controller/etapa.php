<?php

session_start();

include_once "../model/Etapa.php";
include_once "../pdo/EtapaPDO.php";

$etapaPDO = new EtapaPDO();

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

}

if(isset($_GET['tag'])){
	$tag = $_GET['tag'];
	if($tag === "Visualizar"){	
		$id_etapa = $_GET['id_etapa'];
		$listar = $etapaPDO->listarEtapa($id_etapa);
		include_once "../view/etapa.php";
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