<?php
    require_once("header.php");
?> 
		<?php
			foreach ($listar as $l) {
		?>
		<form action="../controller/usuario.php" method="post">
			<div class="form-control">
				<label for="nome">Nome</label>
				<input class="input" type="text" name="nome" id="nome" placeholder="Digite seu nome" value="<?= $l['nome'] ?>">
			</div>
			<div class="form-control">
				<label for="email">E-mail</label>
				<input class="input" type="email" name="email" id="email" placeholder="Digite seu e-mail" value="<?= $l['email'] ?>">
			</div>
			<div class="form-control">
				<label for="senha">Senha</label>
				<input class="input" type="password" name="senha" id="senha" placeholder="Digite sua senha" value="<?= $l['senha'] ?>">
			</div>
			<div class="form-control">
				<label for="cpf">CPF</label>
				<input class="input" type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" value="<?= $l['cpf'] ?>">
			</div>
			<input class="input" type="hidden" name="id_usuario" value="<?= $l['id_usuario'] ?>">
			<div class="form-control">
				<input type="submit" class="btnInput" name="acao" value="Editar Usuario">
			</div>
		</form>

		<?php		
			}
		?>

<?php
    require_once("footer.php");
?> 