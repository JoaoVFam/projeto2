<?php include("header.php");
include("banco-produto.php");
include("conecta.php");?>
<div class="container">
	<div class ="principal">
		<div class="panel panel-default">
		  <div class="panel-heading"><h4>Lista dos Produtos</h4></div>
			<table class="table table-striped table-bordered">
				<?php
					$produtos = listaProdutos($conexao);
					foreach ($produtos as $produto) {
				?>
				</tr>
					<td><?= $produto['nome'] ?></td>
					<td><?= $produto['preco'] ?></td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
		<ol class="breadcrumb">
			<li><a href="produto-lista.php">Lista de Produtos</a></li>
			<li><a href="produto-formulario.php">Adicionar Produto</a></li>
		</ol>
	</div>
</div>

