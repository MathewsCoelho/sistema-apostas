<!DOCTYPE html>
<html>
<head>
	<title> Listagem </title>
</head>
<body>

		<?php
			foreach ($listar as $l) {
		?>
			<tr>
				<td><?php echo $l['id_usuario']; ?></td>
				<td><?php echo $l['nome']; ?></td>
				<td><?php echo $l['email']; ?></td>
				<td><?php echo $l['cpf']; ?></td>
				<td><?php echo $l['senha']; ?></td>
				<td><?php echo $l['status']; ?></td>
				<td><?php echo $l['tipo']; ?></td>		
				<td><?php echo $l['ativo']; ?></td>	
				<td><a href="../Controller/usuario.php?cd_usuario=<?php echo $l['cd_usuario']; ?>&tag=Editar"><input class="btn btn-success" type = "button" name="tag" value="Editar"/></a></td>
				<td><a href="../Controller/usuario.php?cd_usuario=<?php echo $l['cd_usuario']; ?>&tag=Deletar"><input class="btn btn-danger" type = "button" name="tag" value="Deletar"/></a></td>
			</tr>
			<?php		
		}
		?>
</body>
</html>