<?php
	$sql= "SELECT * FROM `livro`";
	$reg= mysql_query($sql,$conexao) or die (mysql_error());
	$numRegistros = mysql_num_rows($reg);
	echo "<div id='content'>
			<p>
			<h2>Gerenciamento de Livros</h2>
			</p>
			<table class='resultados' summary='Livros cadastrados no sistema até o momento.'>
				<tr>	
					<th colspan=11>
						Livros Cadastrados
					</th>
				</tr>
				<tr>
					<th>
						Título
					</th>
					<th>
						Autor
					</th>
					<th>
						Editora
					</th>
					<th>
						Edição
					</th>
					<th>
						Idioma
					</th>
					<th>
						Categoria
					</th>
					<th>
						Preço
					</th>
					<th>
						Quantidade
					</th>
					<th>
						Tipo
					</th>
					<th colspan=2>
						Alterações
					</th>
				</tr>";
	if ($numRegistros!=0){
		while($resultado  = mysql_fetch_object($reg)){
				echo "	<tr> 
							<td>
								".$resultado->titulo."
							</td>
							<td>
								".$resultado->autor."
							</td>
							<td>
								".$resultado->editora."
							</td>
							<td align=center>
								".$resultado->edicao."
							</td>
							<td>
								".$resultado->idioma."
							</td>
							<td>
								".$resultado->categoria."
							</td>
							<td align=center>
								R$".$resultado->preco."
							</td>
							<td align=center>
								".$resultado->quantidade."
							</td>
							<td>
								".$resultado->tipo."
							</td>
							<td align=center>
								<a href='gerenciaLivro.php?acao=editar&id=".$resultado->id."'><img src='images/edit.png'></a>
							</td>
							<td align=center>
								<a href='gerenciaLivro.php?acao=excluir&id=".$resultado->id."' onclick=\"return confirm('Tem Certeza de que deseja excluir este livro?')\"><img src='images/delete.png'></a>
							</td>
						</tr> ";
		}
	}else{
		echo "	<tr>
					<td colspan=11 align=center id='semregistro'>
						Nenhum registro encontrado.
					</td>
				</tr>";
	}
	echo"</table></div>";
?>
