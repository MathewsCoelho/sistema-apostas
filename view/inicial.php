<?php
    require_once("header.php");
?> 
<body>
	<div class="header-admin">
		<form action="../controller/ranking.php" method="post">
			<input class="btnInput margin" type="submit" name="acao" value="Listar Ranking">
		</form>

		<form action="../controller/etapa.php" method="post">
			<input class="btnInput margin" type="submit" name="acao" value="Listar Etapas">
		</form>
	</div>

	<a href="../controller/logout.php" class="logout"> Deslogar </a>

</body>
</html>