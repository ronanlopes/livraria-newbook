<?php
	if ((isset($_GET['id'])) && ($_GET['id'] != "")) {
		$sql= "SELECT * FROM `livro` WHERE `id` LIKE '".$_GET['id']."'";
		$reg= mysql_query($sql,$conexao) or die (mysql_error());
		$numRegistros = mysql_num_rows($reg);
		echo "<div id='content'>
				<p>
					<h2> Editar Livro</h2>
				</p>";
		if ($numRegistros!=0){
			if (isset($_POST['salvar'])){
				$sql="UPDATE `livraria`.`livro` 
				SET `titulo` = '".$_POST['titulo']."', 
				`autor` = '".$_POST['autor']."',
				`editora` = '".$_POST['editora']."',
				`edicao` = '".$_POST['edicao']."', 
				`idioma` = '".$_POST['idioma']."',
				`categoria` = '".$_POST['categoria']."', 
				`preco` = '".$_POST['preco']."', 
				`quantidade` = '".$_POST['quantidade']."', 
				`tipo` = '".$_POST['tipo']."' 
				WHERE `livro`.`id` ='".$_GET['id']."'";
				mysql_query($sql,$conexao) or die (mysql_error());
			}
			$sql= "SELECT * FROM `livro` WHERE `id` LIKE '".$_GET['id']."'";
			$reg= mysql_query($sql,$conexao) or die (mysql_error());
			$resultado  = mysql_fetch_object($reg);
			echo
			"<form action='#' method='post' onsubmit=\"alert('Dados alterados com sucesso!')\">
				<fieldset>
					<legend>Informações do Livro</legend>
					<p>
						<label for=titulo> Título: </label>
						<input type=text name=titulo value='".$resultado->titulo."' id='titulo' maxlength=200 required>
					</p>		
					<p>
						<label for=autor> Autor: </label>
						<input type=text name=autor value='".$resultado->autor."' id='autor' maxlength=100 required>
					</p>
					<p>
						<label for=editora> Editora: </label>
						<input type=text name=editora value='".$resultado->editora."' id='editora' maxlength=100 required>
					</p>
					<p>
						<label for=edicao> Nº Edição: </label>
						<input type=text name=edicao value='".$resultado->edicao."' id='edicao' size=3 required pattern='[0-9]+'>
					</p>
					<p>
						<label for=idioma> Idioma: </label>
						<input type=text name=idioma value='".$resultado->idioma."' id='idioma' maxlength=100 required>
					</p>
					<p>
						<label for=categoria> Categoria: </label>
						<input type=text name=categoria value='".$resultado->categoria."' id='categoria' maxlength=100 required>
					</p>
					<p>
						<label for=preco> Preço: </label>
						<input type=text name=preco value='".$resultado->preco."' id='preco' size=3 required pattern='[0-9.]+'>
					</p>
					<p>
						<label for=quantidade> Quantidade: </label>
						<input type=text name=quantidade value='".$resultado->quantidade."' id='quantidade' size=3 required pattern='[0-9]+'>
					</p>
					<p>
						<label for=tipo> Tipo: </label>
						<select name='tipo' id='tipo' required>
							<option value='impresso'>Impresso</option>
							<option value='ebook' ";
					if ($resultado->tipo=='ebook') echo "selected";		
					echo">E-book</option>
						</select> 
					</p>
					<p>
						<font size=2>*Todos os campos são obrigatórios.</font>
					</p>				
				</fieldset>
				<p>
					<input type=submit name=salvar class=submit value='Salvar'>
					<a href='gerenciaLivro.php'><button type=button onclick='gerenciaLivro.php'>Voltar</button></a>
				</p>
			</form>";
		}else{
			echo "<P align=center>Livro a ser editado não encontrado.</P>";
		}
		echo "</div>";
	}
?>
