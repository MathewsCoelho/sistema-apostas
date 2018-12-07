<?php
	session_start();
	if(isset($_SESSION['id'])){
		if($_SESSION['tipo'] === '2'){
			echo '<script>window.location="../view/admin.php";</script>';
		}	
		else if($_SESSION['tipo'] === '1'){		
			echo '<script>window.location="../view/inicial.php";</script>';
		}
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
	<div class="header">
		<h1> Sistema de Apostas </h1>
	</div>
	<div class="content">
		<div class="formLogin">
			<h2> Faça seu Login </h2>
			<form action="../controller/usuario.php" method="post">
				<div class="form-control">
					<label for="emailLog">E-mail</label>
					<input class="input" type="email" name="email" id="emailLog" placeholder="Digite seu e-mail">
				</div>
				<div class="form-control">
					<label for="senhaLog">Senha</label>
					<input class="input" type="password" name="senha" id="senhaLog" placeholder="Digite sua senha">
				</div>
				<div class="form-control">
					<input type="submit" class="btnInput" name="acao" value="Entrar">
				</div>
			</form>
		</div>
		<div class="formCadastro">
			<h2> Faça seu Cadastro </h2>
			<form action="../controller/usuario.php" method="post">
				<div class="form-control">
					<label for="nome">Nome</label>
					<input class="input" type="text" name="nome" id="nome" placeholder="Digite seu nome">
				</div>
				<div class="form-control">
					<label for="email">E-mail</label>
					<input class="input" type="email" name="email" id="email" placeholder="Digite seu e-mail">
				</div>
				<div class="form-control">
					<label for="senha">Senha</label>
					<input class="input" type="password" name="senha" id="senha" placeholder="Digite sua senha">
				</div>
				<div class="form-control">
					<label for="cpf">CPF</label>
					<input class="input" type="text" name="cpf" id="cpf" placeholder="Digite seu CPF">
				</div>
				<div class="form-control">
					<input type="submit" class="btnInput" name="acao" value="Cadastrar">
				</div>
			</form>
		</div>
	</div>
</body>
</html>