<?php
    require_once("header.php");
?> 
<body>
	<form action="../controller/ranking.php" method="post">
		<input type="submit" name="acao" value="Listar Ranking">
	</form>

	<form action="../controller/etapa.php" method="post">
		<input type="submit" name="acao" value="Listar Etapas">
	</form>
</body>
</html>