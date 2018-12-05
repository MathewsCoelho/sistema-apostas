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
			</tr>
			<?php		
		}
		?>
	</table>
	</body>
</html>