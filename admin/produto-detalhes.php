<?php include("header.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");
$id = $_GET["id"];
$produto = buscaProduto($conexao, $id);
$categoria = retornaCategoria($conexao, $produto['categoria_id'])?>

<div class="panel panel-default">
 	<div class="panel-heading"><h4>Informações do produto</h4></div>
	<table class="table">
		<tr>
			<td><img src="anexo/<?=$produto['foto']?>" class="img-thumbnail"></td>
			<td>Descrição: <?=$produto['descricao']?> </td>
		</tr>
		<tr>
			<td>Nome: <?=$produto['nome']?> </td>
			<td>ID: <?=$produto['id']?></td>
		</tr>
				<tr>
			<td>Preço: <?=$produto['preco']?> </td>
			<td>Categoria: <?=$categoria['nome']?></td>
		</tr>
	</table>
</div>