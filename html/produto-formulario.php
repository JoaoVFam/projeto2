<?php include("header.php");?>
	<div class="container">
		<div class="principal">
			<form action="adiciona-produto.php">
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
						<td><button type="submit" class="btn btn-primary">Cadastrar</button></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
		<ol class="breadcrumb">
			<li><a href="produto-lista.php">Lista de Produtos</a></li>
			<li><a href="produto-formulario.php">Adicionar Produto</a></li>
		</ol>

