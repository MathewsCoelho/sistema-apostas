<?php
    require_once("header.php");
?> 
	<div class="content">
		<?php
			foreach ($listar as $l) {
		?>
			<tr>
				<td> <h2> Etapa de <?php echo $l['local']; ?> </h2></td>
			</tr>
		<div>
			<?php  echo $l['ativo']; if($l['ativo'] === 1){ ?>
			<h2> Realizar Aposta </h2>
			<form action="../controller/aposta.php" method="post">
				<div class="form-control">
					<select class="select" name="corredor" id="corredor">
						<?php foreach ($listarCorredores as $corredor) { ?>
						<option value="<?= $corredor['id_cavalo']; ?>">
					  		<?= $corredor['nome']; ?>
				  		</option>
				  		<?php } ?>
				  		<input type="hidden" name="id_etapa" value="<?= $l['id_etapa']; ?>">
					</select>
				</div>
				<div class="form-control">
					<input class="btnInput" type="submit" name="acao" value="Cadastrar Aposta">
				</div>
			</form>
		<?php } else{ ?>
			<h2> Etapa Finalizada  </h2>
		</div>
			<?php		
			}
		}
		?>
	</div>
<?php
    require_once("footer.php");
?> 