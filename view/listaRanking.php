<?php
    require_once("header.php");
?> 
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
				<td><a href="../Controller/etapa.php?cd_usuario=<?php echo $l['id_etapa']; ?>&tag=Editar"><input class="btn btn-success" type = "button" name="tag" value="Editar"/></a></td>
				<td><a href="../Controller/etapa.php?cd_usuario=<?php echo $l['id_etapa']; ?>&tag=Deletar"><input class="btn btn-danger" type = "button" name="tag" value="Deletar"/></a></td>
				<?php } ?>
			</tr>
			<?php		
		}
		?>
	</table>
	</body>
</html>