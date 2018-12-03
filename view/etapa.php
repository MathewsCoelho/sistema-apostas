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
			<h1> Realizar Aposta </h1>
			<form action="../controller/aposta.php" method="post">
				<div>
					<label for="numero"> Número do Cavalo </label>
					<input type="text" name="numero" id="numero">
					<input type="hidden" name="id_etapa" value="<?php echo $l['id_etapa']?>">
				</div>
				<div>
					<input type="submit" name="acao" value="Cadastrar Aposta">
				</div>
			</form>
		</div>
	</body>
</html>