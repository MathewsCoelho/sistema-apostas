<?php
    require_once("header.php");
?> 
		<?php
			foreach ($listar as $l) {
		?>

		<form action="../controller/cavalo.php" method="post">
			<div class="form-control">
				<label for="nome">Nome</label>
				<input class="input" type="nome" name="nome" id="nome" value="<?= $l['nome'] ?>">
			</div>
			<div class="form-control">
				<label for="numero">Numero</label>
				<input class="input" type="text" name="numero" id="numero" value="<?= $l['numero'] ?>">
			</div>
			<input type="hidden" name="id_cavalo" value="<?= $l['id_cavalo']; ?>">
			<div class="form-control">
				<input class="btnInput" type="submit" name="acao" value="Editar Cavalo">
			</div>
		</form>

		<?php
			}
		?>

<?php
    require_once("footer.php");
?> 