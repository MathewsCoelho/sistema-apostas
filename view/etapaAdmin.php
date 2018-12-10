<?php
    require_once("header.php");
?> 
	<div class="content">
		<?php
			foreach ($listar as $l) {
		?>
			<tr>
				<td> <h2> Etapa de <?php echo $l['local']; ?> </h2> </td>
			</tr>
		<div>
			<h2> Competidores: </h2>
			<table>
				<tr>
					<th> Nome do Cavalo: </th>
				</tr>
				<?php foreach ($listarCorredores as $corredor) { ?>
					<tr>
						<td>
				  			<?= $corredor['nome']; ?>
			  			</td>
			  		</tr>
		  		<?php } ?>
			</table>
		</div>

		<div>
			<h2> Cadastrar Cavalos na Corrida </h2>
			<form action="../controller/etapa.php" method="post">
				<div class="form-control">
					<label for="cavalo"> Cavalo </label>
					<select class="select" name="cavalo" id="cavalo">
						<?php foreach ($listarCavalo as $cavalo) { ?>
						<option value="<?= $cavalo['id_cavalo']; ?>">
					  		<?= $cavalo['nome']; ?>
				  		</option>
				  		<?php } ?>
					</select>
					<input type="hidden" name="id_etapa" value="<?= $l['id_etapa']; ?>">
				</div>
				<div class="form-control">
					<input class="btnInput" type="submit" name="acao" value="Cadastrar Corredor">
				</div>
			</form>
		</div>

		<div>
			<h2> Finalizar Etapa </h2>
			<form action="../controller/etapa.php" method="post">
				<div class="form-control">
					<label for="cavalo"> Cavalo Vencedor </label>
					<select class="select" name="cavalo" id="cavalo">
						<?php foreach ($listarCorredor as $cavalo2) { ?>
						<option value="<?= $cavalo2['id_cavalo']; ?>">
					  		<?= $cavalo2['nome']; ?>
				  		</option>
				  		<?php } ?>
					</select>
					<input type="hidden" name="id_etapa" value="<?= $l['id_etapa']; ?>">
				</div>
				<div class="form-control">
					<input class="btnInput" type="submit" name="acao" value="Finalizar Etapa">
				</div>
			</form>
		</div>
		<?php		
		}
		?>
	</div>
<?php
    require_once("footer.php");
?> 