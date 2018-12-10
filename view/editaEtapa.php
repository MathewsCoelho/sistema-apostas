<?php
    require_once("header.php");
?> 
		<?php
			foreach ($listar as $l) {
		?>
		<form action="../controller/etapa.php" method="post">
			<div class="form-control">
				<label for="nome">Local</label>
				<input class="input" type="text" name="local" id="local" placeholder="Digite o local" value="<?= $l['local'] ?>">
			</div>
			<input class="input" type="hidden" name="id_etapa" value="<?= $l['id_etapa'] ?>">
			<div class="form-control">
				<input type="submit" class="btnInput" name="acao" value="Editar Etapa">
			</div>
		</form>

		<?php		
			}
		?>

<?php
    require_once("footer.php");
?> 