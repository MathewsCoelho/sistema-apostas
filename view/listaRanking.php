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
				<td><a href="../controller/usuario.php?id_usuario=<?php echo $l['id_usuario']; ?>&tag=Editar"><input class="btnEditar" type ="button" name="acao" value="Editar"/></a></td>	
				<td><a href="../Controller/etapa.php?id_etapa=<?php echo $l['id_etapa']; ?>&tag=Deletar"><input class="btnDanger" type="button" name="tag" value="Deletar"/></a></td>
			</tr>
			<?php		
		}
		?>
	</table>

<?php
    require_once("footer.php");
?> 