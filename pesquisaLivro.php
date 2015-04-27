<?php
	include("conexao.php");
?>

<html>
	<head>
		<title>Livraria NewBook - Pesquisar Livro</title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="style.css"/>
		<link type="text/css" rel="stylesheet" href="form.css"/>
		<link rel="icon" type="image/png" href="images/icon.png"/>
	</head>
	<body>
		<div id="all">
			<?php
				include ('header.php');
			?>
			<div id="content">
				<p>
					<h2>Pesquisa</h2>
				</p>
					<form method=get action="#">
						<fieldset>
						<legend>Dados da busca</legend>
							<label for=titulopesquisa>Título do livro:</label>
							<input type=text name=titulopesquisa id="titulopesquisa" required='TRUE' autofocus='TRUE'>				
						</fieldset>
						<P><input type="submit" class=submit value=Pesquisar name=pesquisar></P>
					</form>
				<p>
				<?php
					if (isset($_GET['pesquisar'])){
						echo "<div id='resultados'><p><h3>Resultados:</h3></p>";
						$sql= "SELECT * FROM `livro` WHERE `titulo` LIKE '".$_GET['titulopesquisa']."'";
						$reg= mysql_query($sql,$conexao) or die (mysql_error());
						$numRegistros = mysql_num_rows($reg);
						if ($numRegistros!=0){
							while($resultado  = mysql_fetch_object($reg)){
									echo "<P>Título: ".$resultado->titulo."</P>";
									echo "<P>Autor: ".$resultado->autor."</P>";
									echo "<P>Editora: ".$resultado->editora."</P>";
									echo "<P>Edição: ".$resultado->edicao."</P>";
									echo "<P>Idioma: ".$resultado->idioma."</P>";
									echo "<P>Categoria: ".$resultado->categoria."</P>";
									echo "<P>Preço: R$".$resultado->preco."</P>";
									echo "<P>Quantidade: ".$resultado->quantidade."</P></div>";
							}
						}else{
							echo "<P>Nenhum registro encontrado.</P>";
						}
					}
				?>
			</div>
			<?php
				include ("footer.php");
			?>
		</div>
	</body>
</html>
