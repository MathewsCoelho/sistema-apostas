<?php
	session_start();
	if(!isset($_SESSION['id'])){
	    header("Location: ../view/index.php");
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
	</div>