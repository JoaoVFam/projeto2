<?php include("header.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");
$id = $_GET["id"];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);?>
<h1>Alterar Produto</h1>
<form action="altera-produto.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?=$produto['id']?>">
	<table class="table">
		<tr>
			<td>Nome</td>
			<td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"></td>
		</tr>
		<tr>
			<td>Preço</td>
			<td><input class="form-control" type="text" name="preco" value="<?=$produto['preco']?>"></td>
		</tr>
		<tr>
			<td>Descrição</td>
			<td><textarea name="descricao" class="form-control"><?=$produto['descricao']?></textarea></td>
		</tr>
		<tr>
			<td>Categoria</td>
			<td>
				<select class="form-control" name="categoria_id">
					<?php foreach ($categorias as $categoria) :
						$verificaCategoria = $produto['categoria_id'] == $categoria['id'];
						$selecao = $verificaCategoria ? "selected='selected'" : "";?>
						<option type="radio" value="<?=$categoria['id']?>" <?=$selecao?>>
							<?=$categoria['nome']?>
						</option>
					<?php endforeach?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Imagem</td>
			<td><input type="file" name="foto" class="form-control" src="anexo/<?=$produto['nome_imagem']?>"></td>
		</tr>
		<tr>
			<td><button type="submit" class="btn btn-primary">Alterar</button></td>
		</tr>
	</table>
</form>
<?php include("footer.php");?>