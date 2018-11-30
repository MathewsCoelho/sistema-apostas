<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Apostas</title>
</head>
<body>
	<div>
		<h1> Faça seu Login </h1>
		<form action="../controller/usuario.php" method="post">
				<div>
					<label for="email">E-mail</label>
					<input type="email" name="email" id="email">
				</div>
			<div>
				<label for="senha">Senha</label>
				<input type="password" name="senha" id="senha">
			</div>
			<div>
				<input type="submit" name="acao" value="Entrar">
			</div>
		</form>
	</div>
	<div>
		<h1> Faça seu Cadastro </h1>
		<form action="../controller/usuario.php" method="post">
			<div>
				<label for="nome">Nome</label>
				<input type="text" name="nome" id="nome">
			</div>
			<div>
				<label for="email">E-mail</label>
				<input type="email" name="email" id="email">
			</div>
			<div>
				<label for="senha">Senha</label>
				<input type="password" name="senha" id="senha">
			</div>
			<div>
				<label for="cpf">CPF</label>
				<input type="text" name="cpf" id="cpf">
			</div>
			<div>
				<input type="submit" name="acao" value="Cadastrar">
			</div>
		</form>
	</div>
</body>
</html>