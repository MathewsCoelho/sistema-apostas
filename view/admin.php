<?php
    require_once("header.php");
?> 

	<form action="../controller/ranking.php" method="post">
		<input type="submit" name="acao" value="Listar Ranking">
	</form>
	<form action="../controller/etapa.php" method="post">
		<input type="submit" name="acao" value="Listar Etapas">
	</form>
	<form action="../controller/usuario.php" method="post">
		<input type="submit" name="acao" value="Listar Usuarios">
	</form>
	<form action="../controller/cavalo.php" method="post">
		<input type="submit" name="acao" value="Listar Cavalos">
	</form>

	<div>
		<h1> Cadastro de Cavalo </h1>
		<form action="../controller/cavalo.php" method="post">
				<div>
					<label for="nome">Nome</label>
					<input type="nome" name="nome" id="nome">
				</div>
			<div>
				<label for="numero">Numero</label>
				<input type="text" name="numero" id="numero">
			</div>
			<div>
				<input type="submit" name="acao" value="Cadastrar Cavalo">
			</div>
		</form>
	</div>

	<div>
		<h1> Cadastre uma etapa </h1>
		<form action="../controller/etapa.php" method="post">
				<div>
					<label for="local">Local</label>
					<input type="local" name="local" id="local">
				</div>
			<div>
				<input type="submit" name="acao" value="Cadastrar">
			</div>
		</form>
	</div>


</body>
</html>