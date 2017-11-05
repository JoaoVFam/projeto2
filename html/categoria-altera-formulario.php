<?php include("header.php");
include("conecta.php");
include("banco-categoria.php");
$id = $_GET['id'];
$categoria = buscaCategoria($conexao, $id);
//$categorias = listaCategorias($conexao);
//$categorias = listaCategorias($conexao);
?>
	<div class="container">
		<div class="principal">
			<ol class="breadcrumb">
				<li><a href="produto-lista.php">Lista de Produtos</a></li>
				<li><a href="produto-formulario.php">Adicionar Produto</a></li>
			</ol>
			<form action="altera-categoria.php" method="post">
				<input type="hidden" name="id" value="<?=$categoria['id']?>">
				<h1 class=>Alterando categoria</h1>
				<table class="table">
					<tr>
						<td>Nome</td>
						<td> <input class="form-control" type="text" name="nome" value="<?=$categoria['nome']?>"></td>
					</tr>
					<tr>
						<td><button type="submit" class="btn btn-primary">Alterar</button></td>
					</tr>
				</table>
			</form>
		</div>
	</div>


