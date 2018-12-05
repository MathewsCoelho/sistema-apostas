<?php
    require_once("header.php");
?> 
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
				<td><a href="../controller/usuario.php?id_usuario=<?php echo $l['id_usuario']; ?>&tag=Deletar"><input class="btnDanger" type ="button" name="acao" value="Deletar"/></a></td>
			</tr>
			<?php		
		}
		?>
		</table>
</body>
</html>