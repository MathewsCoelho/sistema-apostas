<?php
    require_once("header.php");
?> 
		<?php
			foreach ($listar as $l) {
		?>
			<tr>
				<td><?php echo $l['local']; ?></td>
			</tr>
			<?php		
		}
		?>

		<div>
			<h2> Realizar Aposta </h2>
			<form action="../controller/aposta.php" method="post">
				<div class="form-control">
					<label for="numero"> Número do Cavalo </label>
					<input class="input" type="text" name="numero" id="numero">
					<input type="hidden" name="id_etapa" value="<?php echo $l['id_etapa']?>">
				</div>
				<div class="form-control">
					<input class="btnInput" type="submit" name="acao" value="Cadastrar Aposta">
				</div>
			</form>
		</div>

<?php
    require_once("footer.php");
?> 