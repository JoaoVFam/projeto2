<?php include("header.php");
include("conecta.php");
include("banco-categoria.php");
$categorias = listaCategorias($conexao);
?>
	<div class="container">
		<div class="principal">
		<ol class="breadcrumb">
		<li><a href="produto-lista.php">Lista de Produtos</a></li>
		<li><a href="produto-formulario.php">Adicionar Produto</a></li>
		<li><a href="categoria-lista.php">Lista de Categorias</a><li>
		<li><a href="categoria-adiciona.php">Adicionar Categoria</a><li>
			</ol>
			<form action="adiciona-produto.php" method="post">
				<h1 class=>Formulário do Produto</h1>
				<table class="table">
					<tr>
						<td>Nome</td>
						<td> <input class="form-control" type="text" name="nome"></td>
					</tr>
					<tr>
						<td>Preço</td>
						<td> <input class="form-control" type="text" name="preco"></td>
					</tr>
					<tr>
						<td>Descrição</td>
						<td><textarea name="descricao" class="form-control"></textarea></td>
					</tr>
					<tr>
						<td>Categoria</td>
						<td>
							<select name="categoria_id" class="form-control">
								<?php foreach ($categorias as $categoria) : ?> 
									<option value="<?=$categoria['id']?>">
											<?=$categoria['nome']?><br/>
									</option>
					
									<?=$categoria['nome']?><br/>
								<?php endforeach ?>
							</select>
						</td>
					</tr>
					<tr>
						<td><button type="submit" class="btn btn-primary">Cadastrar</button></td>
					</tr>
				</table>
			</form>
		</div>
	</div>


