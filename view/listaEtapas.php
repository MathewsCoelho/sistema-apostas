<?php
    require_once("header.php");
?> 
	<table>
		<tr>
			<th> Id da Etapa </th>
			<th> Local  </th>
			<th> Id do Vencedor </th>
		</tr>
		<?php
			foreach ($listar as $l) {
		?>
			<tr>
				<td><?php echo $l['id_etapa']; ?></td>
				<td><?php echo $l['local']; ?></td>
				<td><?php echo $l['id_vencedor']; ?></td>
				<td><a href="../Controller/etapa.php?id_etapa=<?php echo $l['id_etapa']; ?>&tag=Visualizar"><input type = "button" name="tag" value="Visualizar"/></a></td>
				<?php if($_SESSION['tipo'] === '2'){ ?>
				<td><a href="../Controller/etapa.php?id_etapa=<?php echo $l['id_etapa']; ?>&tag=Deletar"><input type = "button" name="tag" value="Deletar"/></a></td>
				<?php } ?>
			</tr>
		<?php		
			}
		?>
	</table>
</body>
</html>