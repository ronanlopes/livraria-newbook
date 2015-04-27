<?php
	include("conexao.php");
?>

<html>
	<head>
		<title>Livraria NewBook - Gerenciamento de Livros</title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="style.css"/>
		<link type="text/css" rel="stylesheet" href="form.css"/>
		<link type="text/css" rel="stylesheet" href="table.css"/>
		<link rel="icon" type="image/png" href="images/icon.png"/>
	</head>
	<body>
		<div id="all">
			<?php
				include ('header.php');
				if (isset($_GET['acao'])&&($_GET['acao']=='excluir')){
					include ("excluiLivro.php");
				}
				if (isset($_GET['acao'])&&($_GET['acao']=='editar')){
					include ("editaLivro.php");
				}else{
					include ("listaLivro.php");
				}
				include("footer.php");
			?>
		</div>
	</body>
</html>
