<?php include("header.php");
include("banco-categoria.php")
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
				<p>Categoria apagadada com sucesso</p>
			</div>
		 <?php
			}
		 ?>
		<div class="panel panel-default">
		  <div class="panel-heading"><h4>Lista das Categorias</h4></div>
			<table class="table table-striped table-bordered">
				<?php
					$produtos = listaCategorias($conexao);
					foreach ($categorias as $categoria) {
				?>
				</tr>
					<td><?= $categoria['nome'] ?></td>
						<form action="remove-categoria.php" method="post">
							<input type="hidden" name="id" value="<?=$produto['id']?>">
							<a href="remove-categoria.php?id=<?= $produto['id']?>" class="text-danger">remover</a>
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