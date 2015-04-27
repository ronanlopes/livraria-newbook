<?php
	if ((isset($_GET['id'])) && ($_GET['id'] != "")) {
		$sql = "DELETE FROM `livro` WHERE `id`  LIKE '".$_GET['id']."'";
		mysql_query($sql,$conexao) or die (mysql_error());
	}
?>
