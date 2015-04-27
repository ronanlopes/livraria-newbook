<?php
	include("conexao.php");
?>

<html>
	<head>
		<title>Livraria NewBook - Cadastro de Livros</title>
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
					<h2> Cadastro de Livros</h2>
				</p>
				<form action="#" method="post" onsubmit="alert('Livro cadastrado com sucesso!')">
					<fieldset>
						<legend>Informações do Livro</legend>
						<p>
							<label for=titulo> Título: </label>
							<input type=text name=titulo id="titulo" maxlength=200 required="TRUE">
						</p>		
						<p>
							<label for=autor> Autor: </label>
							<input type=text name=autor id="autor" maxlength=100 required="TRUE">
						</p>
						<p>
							<label for=editora> Editora: </label>
							<input type=text name=editora id="editora" maxlength=100 required="TRUE">
						</p>
						<p>
							<label for=edicao> Nº Edição: </label>
							<input type=text name=edicao id="edicao" size=3 required pattern="[0-9]+">
						</p>
						<p>
							<label for=idioma> Idioma: </label>
							<input type=text name=idioma id="idioma" maxlength=100 required="TRUE">
						</p>
						<p>
							<label for=categoria> Categoria: </label>
							<input type=text name=categoria id="categoria" maxlength=100 required="TRUE">
						</p>
						<p>
							<label for=preco> Preço: </label>
							<input type=text name=preco id="preco" size=3 required pattern="[0-9.]+">
						</p>
						<p>
							<label for=quantidade> Quantidade: </label>
							<input type=text name=quantidade id="quantidade" size=3 required pattern="[0-9]+">
						</p>
						<p>
							<label for=tipo> Tipo: </label>
							<select name="tipo" id="tipo" required="TRUE">
								<option value="impresso">Impresso</option>
								<option value="ebook">E-book</option>
							</select> 
						</p>
						<p>
							<font size=2>*Todos os campos são obrigatórios.</font>
						</p>				
					</fieldset>
					<p>
						<input type=submit name=enviar class=submit value="Cadastrar">
					</p>
				</form>
			</div>
			<?php
				include ("footer.php");
			?>
		</div>
	</body>
</html>

<?php
	if (isset($_POST['enviar'])){
		$titulo=$_POST['titulo'];
		$autor=$_POST['autor'];
		$editora=$_POST['editora'];
		$edicao=$_POST['edicao'];
		$idioma=$_POST['idioma'];
		$categoria=$_POST['categoria'];
		$preco=$_POST['preco'];
		$quantidade=$_POST['quantidade'];
		$tipo=$_POST['tipo'];
		
		$sql = "INSERT INTO livro (titulo,autor,editora,edicao,idioma,categoria,preco,quantidade,tipo) VALUES ('".$titulo."','".$autor."','".$editora."','".$edicao."','".$idioma."','".$categoria."','".$preco."','".$quantidade."','".$tipo."')";
		mysql_query($sql,$conexao) or die (mysql_error());
	}
?>
