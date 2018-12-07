<?php
    require_once("headerAdmin.php");
?> 
	<div class="header-admin">
		<form action="../controller/ranking.php" method="post">
			<input class="btnInput margin" type="submit" name="acao" value="Listar Ranking">
		</form>
		<form action="../controller/etapa.php" method="post">
			<input class="btnInput margin" type="submit" name="acao" value="Listar Etapas">
		</form>
		<form action="../controller/usuario.php" method="post">
			<input class="btnInput margin" type="submit" name="acao" value="Listar Usuarios">
		</form>
		<form action="../controller/cavalo.php" method="post">
			<input class="btnInput margin" type="submit" name="acao" value="Listar Cavalos">
		</form>
	</div>
	<div class="content">
		<div class="formCavalo">
			<h2> Cadastro de Cavalo </h2>
			<form action="../controller/cavalo.php" method="post">
				<div class="form-control">
					<label for="nome">Nome</label>
					<input class="input" type="nome" name="nome" id="nome">
				</div>
				<div class="form-control">
					<label for="numero">Numero</label>
					<input class="input" type="text" name="numero" id="numero">
				</div>
				<div class="form-control">
					<input class="btnInput" type="submit" name="acao" value="Cadastrar Cavalo">
				</div>
			</form>
		</div>
		<div class="formEtapa">
			<h2> Cadastre uma etapa </h2>
			<form action="../controller/etapa.php" method="post">
					<div class="form-control">
						<label for="local">Local</label>
						<input class="input" type="local" name="local" id="local">
					</div>
				<div class="form-control">
					<input class="btnInput" type="submit" name="acao" value="Cadastrar">
				</div>
			</form>
		</div>
	</div>

<?php
    require_once("footer.php");
?> 