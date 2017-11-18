<?php include("header.php");
include("conecta.php");
include("banco-categoria.php");
$categorias = listaCategorias($conexao);?>
<h1>Formulário de Produto</h1>
<form action="adiciona-produto.php" method="post" enctype="multipart/form-data">
	<table class="table">
		<tr>
			<td>Nome</td>
			<td><input class="form-control" type="text" name="nome"></td>
		</tr>
		<tr>
			<td>Preço</td>
			<td><input class="form-control" type="text" name="preco"></td>
		</tr>
		<tr>
			<td>Descrição</td>
			<td><textarea name="descricao" class="form-control"></textarea></td>
		</tr>
		<tr>
			<td>Categoria</td>
			<td>
				<select name="categoria_id" class="form-control">
					<?php foreach ($categorias as $categoria) :?> 
						<option type="radio" value="<?=$categoria['id']?>">
							<?=$categoria['nome']?><br/>
						</option>
					<?php endforeach?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Imagem</td>
			<td><input type="file" name="nome_imagem" class="form-control"></td>
		</tr>
		<tr>
			<td><button type="submit" class="btn btn-primary">Cadastrar</button></td>
		</tr>
	</table>
</form>
<?php include("footer.php");?>