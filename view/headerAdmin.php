<?php
	session_start();
	if(!isset($_SESSION['id'])){
	    header("Location: ../view/index.php");
	}
	else if($_SESSION['tipo'] === '1'){		
		echo '<script>window.location="../view/inicial.php";</script>';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Sistema de Apostas </title>
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,400,700, rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body>
	<div class="header">
		<h1> Sistema de Apostas </h1>
		<p class="user"> Olá, <span> <?= $_SESSION['nome'] ?> </span> Seja bem-vindo. </p>
	</div>