<?php include("header.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");
$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$categorias = listaCategorias($conexao);
?>
	<div class="container">
		<div class="principal">
			<ol class="breadcrumb">
				<li><a href="produto-lista.php">Lista de Produtos</a></li>
				<li><a href="produto-formulario.php">Adicionar Produto</a></li>
			</ol>
			<form action="altera-produto.php" method="post">
				<input type="hidden" name="id" value="<?=$produto['id']?>">
				<h1 class=>Alterando Produto</h1>
				<table class="table">
					<tr>
						<td>Nome</td>
						<td> <input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"></td>
					</tr>
					<tr>
						<td>Preço</td>
						<td> <input class="form-control" type="text" name="preco" value="<?=$produto['preco']?>"></td>
					</tr>
					<tr>
						<td>Descrição</td>
						<td><textarea name="descricao" class="form-control"><?=$produto['descricao']?></textarea></td>
					</tr>
					<tr>
						<td>Categoria</td>
						<td>
							<select name="categoria_id" class="form-control">
								<?php foreach ($categorias as $categoria) : 
									$essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
									$selecao = $essaEhACategoria ? "selected='selected'" : "";
								?> 
									<option value="<?=$categoria['id']?>" <?=$selecao?>>
											<?=$categoria['nome']?>
									</option>
									<?=$categoria['nome']?><br/>
								<?php endforeach ?>
							</select>
						</td>
					</tr>
					<tr>
						<td><button type="submit" class="btn btn-primary">Alterar</button></td>
					</tr>
				</table>
			</form>
		</div>
	</div>


