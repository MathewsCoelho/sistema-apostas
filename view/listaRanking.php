<?php
    require_once("header.php");
?>
	<form action="../controller/ranking.php" method="post">
		<div class="form-control">
			<label for="user"> Filtrar pontuação por nome: </label>
			<input type="text" name="user" class="input">
		</div>
		<div class="form-control">
		<input type="submit" class="btnInput" name="acao" value="Pesquisar">
		</div>
	</form>

	<table>
		<tr>
			<th> Nome </th>
			<th> Pontos </th>
		</tr>
		<?php
			foreach ($listar as $l) {
		?>
			<tr>
				<td><?php echo $l['nome']; ?></td>
				<td><?php echo $l['pontos']; ?></td>
				<?php if($_SESSION['tipo'] === '2'){ ?>
				<td><a href="../controller/ranking.php?id_usuario=<?php echo $l['id_usuario']; ?>&tag=Editar"><input class="btnEditar" type ="button" name="acao" value="Editar"/></a></td>	
				<?php } ?>
			</tr>
			<?php		
		}
		?>
	</table>

<?php
    require_once("footer.php");
?> 