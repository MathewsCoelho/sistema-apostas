<?php
    require_once("header.php");
?> 

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
	
				<td><a href="../controller/cavalo.php?id_cavalo=<?php echo $l['id_cavalo']; ?>&tag=Deletar"><input type = "button" name="acao" value="Deletar"/></a></td>
			</tr>
			<?php		
		}
		?>
	</table>	
</body>
</html>