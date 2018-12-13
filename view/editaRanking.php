<?php
    require_once("header.php");
?> 
		<?php
			foreach ($listar as $l) {
		?>
		<form action="../controller/ranking.php" method="post">
			<div class="form-control">
				<label for="nome">Pontuação</label>
				<input class="input" type="text" name="pontos" id="pontos" placeholder="Digite a pontuação" value="<?= $l['pontos'] ?>">
			</div>
			<input class="input" type="hidden" name="id_usuario" value="<?= $l['id_usuario'] ?>">
			<div class="form-control">
				<input type="submit" class="btnInput" name="acao" value="Editar Ranking">
			</div>
		</form>

		<?php		
			}
		?>

<?php
    require_once("footer.php");
?> 