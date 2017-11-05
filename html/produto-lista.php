<?php include("header.php");
include("banco-produto.php");
include("conecta.php");?>
<div class="container">
	<div class ="principal">
		<ol class="breadcrumb">
			<li><a href="produto-lista.php">Lista de Produtos</a></li>
			<li><a href="produto-formulario.php">Adicionar Produto</a></li>

		</ol>
		<?php 
			if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true") {
		 ?>
		 	<div class="alert alert-success" role="alert">
				<p>Produto apagadado com sucesso</p>
			</div>
		 <?php
			}
		 ?>
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
					<td><?= $produto['categoria_nome']?></td>
					<td><a href="produto-altera-formulario.php?id=<?=$produto['id']?>">alterar</a></td>
					<td>
						<form action="remove-produto" method="post">
							<input type="hidden" name="id" value="<?=$produto['id']?>">
							<a href="remove-produto.php?id=<?= $produto['id']?>" class="text-danger">remover</a>
						</form>
					</td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
		
	</div>
</div>

