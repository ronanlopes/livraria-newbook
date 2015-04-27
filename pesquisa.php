<?php
	include("conexao.php");
?>

<html>
	<head>
		<title>Pesquisar Livro</title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="style.css"/>
	</head>
	<body>
		<ul class="menu">
			<li class="item"><a href="index.php">Home</a></li>
			<li class="item"><a href="cadastroLivro.php">Cadastro de Livros</a></li>
			<li class="item"><a href="#">Pesquisa de Livros</a></li>
			<li class="item"><a href="#">Exclusão de livros</a></li>
		</ul>
		
		<?php
			$sql= "SELECT * FROM livro";
			$reg= mysql_query($sql,$conexao) or die (mysql_error());
			$resultado  = mysql_fetch_object($res);
			
			echo $resultado->titulo;
		?>
	</body>
</html>
