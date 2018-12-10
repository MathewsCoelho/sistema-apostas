<?php
    require_once("header.php");
?> 

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