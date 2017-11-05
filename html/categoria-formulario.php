<?php include("header.php");
include("conecta.php");
include("banco-categoria.php");
?>
	<div class="container">
		<div class="principal">
		<ol class="breadcrumb">
		<li><a href="produto-lista.php">Lista de Produtos</a></li>
		<li><a href="produto-formulario.php">Adicionar Produto</a></li>
		<li><a href="categoria-lista.php">Lista de Categorias</a><li>
		<li><a href="categoria-adiciona.php">Adicionar Categoria</a><li>
			</ol>
			<form action="adiciona-categoria.php" method="post">
				<h1 class=>Formulário da categoria</h1>
				<table class="table">
					<tr>
						<td>Nome</td>
						<td> <input class="form-control" type="text" name="nome"></td>
					</tr>
					<tr>
					<tr>
						<td><button type="submit" class="btn btn-primary">Cadastrar</button></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
