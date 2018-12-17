<?php
    require_once("header.php");
?> 
	<form action="../controller/aposta.php" method="post">
		<div class="form-control">
			<label for="etapa"> Filtrar apostas por etapa: </label>
			<input type="text" name="etapa" class="input">
		</div>
		<div class="form-control">
		<input type="submit" class="btnInput" name="acao" value="Pesquisar">
		</div>
	</form>
	<table>
		<tr>
			<th> Apostador </th>
			<th> Local da Etapa </th>
			<th> Nome do Cavalo </th>
		</tr>
		<?php
			foreach ($listar as $l) {
		?>
			<tr>
				<td><?php echo $l['nome']; ?></td>
				<td><?php echo $l['local']; ?></td>
				<td><?php echo $l['nome_cavalo'];?></td>
			</tr>
			<?php		
		}
		?>
	</table>	

<?php
    require_once("footer.php");
?> 