<?php
	session_start();
	if($_SESSION['tipo'] === '2'){
	    header("Location: ../view/admin.php");
	}
	else if($_SESSION['tipo'] === '1'){
	    header("Location: ../view/inicial.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Apostas</title>
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,400,700, rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body>
	<div class="bg-admin">
		<div class="formAdmin painel">
			<h2> Painel Administrativo </h2>
			<form action="../controller/usuario.php" method="post">
				<div class="form-control">
					<label for="email">E-mail</label>
					<input class="input" type="email" name="email" id="email">
				</div>
				<div class="form-control">
					<label for="senha">Senha</label>
					<input class="input" type="password" name="senha" id="senha">
				</div>
				<div class="form-control">
					<input class="btnInput btnRed" type="submit" name="acao" value="Entrar">
				</div>
			</form>
		</div>
	</div>
</body>
</html>