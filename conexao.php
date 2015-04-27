<?php
	$conexao = mysql_connect("localhost","root","root") or die (mysql_error());
	$db = mysql_select_db("livraria",$conexao);
?>
