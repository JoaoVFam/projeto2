<?php include("header.php");?>
	<?php include("conecta.php");?>
	<?php include("banco-categoria.php");?>

	<div class="container">
		<div class="principal">
			<ol class="breadcrumb">
				<li><a href="produto-lista.php">Lista de Produtos</a></li>
				<li><a href="produto-formulario.php">Adicionar Produto</a></li>
			</ol>
			<?php 
				$id = $_POST["id"];
				$nome_categoria = $_POST["nome"];
				if (alteraCategoria($conexao, $id, $nome_categoria)) { ?>
					<div class="alert alert-success" role="alert">
						<p>Categoria <?= $nome_categoria ?>,Categoria foi alterado. </p>
					</div>
				<?php 
				} 
				else {
					$msg = mysqli_error($conexao);
				?>
					<div class="alert alert-danger" role="alert">
						<p>Categoria <?= $nome_categoria; ?> não foi alterado. <?= $msg?></p>
					</div>
				<?php
			}
			?>
		</div>
	</div>