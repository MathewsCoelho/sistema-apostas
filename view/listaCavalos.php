<?php
    require_once("header.php");
?> 
	<form action="../controller/cavalo.php" method="post">
		<div class="form-control">
			<label for="cavalo"> Filtrar cavalos por nome: </label>
			<input type="text" name="cavalo" class="input">
		</div>
		<div class="form-control">
		<input type="submit" class="btnInput" name="acao" value="Pesquisar">
		</div>
	</form>
	<table>
		<tr>
			<th> Id do Cavalo </th>
			<th> Nome </th>
			<th> Numero </th>
		</tr>
		<?php
			foreach ($listar as $l) {
		?>
			<tr>
				<td><?php echo $l['id_cavalo']; ?></td>
				<td><?php echo $l['nome']; ?></td>
				<td><?php echo $l['numero']; ?></td>
				<td><a href="../controller/cavalo.php?id_cavalo=<?php echo $l['id_cavalo']; ?>&tag=Editar"><input class="btnEditar" type ="button" name="acao" value="Editar"/></a></td>	
				<td><a href="../controller/cavalo.php?id_cavalo=<?php echo $l['id_cavalo']; ?>&tag=Deletar"><input class="btnDanger" type="button" name="acao" value="Deletar"/></a></td>
			</tr>
			<?php		
		}
		?>
	</table>	

<?php
    require_once("footer.php");
?> 