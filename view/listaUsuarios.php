<?php
    require_once("header.php");
?> 
		<form action="../controller/usuario.php" method="post">
			<div class="form-control">
				<label for="user"> Filtrar usuário por nome: </label>
				<input type="text" name="user" class="input">
			</div>
			<div class="form-control">
			<input type="submit" class="btnInput" name="acao" value="Pesquisar">
			</div>
		</form>
		<table>
			<tr>
				<th> Id do Usuário </th>
				<th> Nome </th>
				<th> Email </th>
				<th> CPF </th>
				<th> Senha </th>
				<th> Tipo </th>
			</tr>
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
				<td><a href="../controller/usuario.php?id_usuario=<?php echo $l['id_usuario']; ?>&tag=Editar"><input class="btnEditar" type ="button" name="acao" value="Editar"/></a></td>	
				<td><a href="../controller/usuario.php?id_usuario=<?php echo $l['id_usuario']; ?>&tag=Deletar"><input class="btnDanger" type ="button" name="acao" value="Deletar"/></a></td>
			</tr>
			<?php		
		}
		?>
		</table>

<?php
    require_once("footer.php");
?> 