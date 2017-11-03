
	<?php include("header.php");?>
	<?php include("conecta.php");?>
	<?php include("banco-produto.php");?>

	<div class="container">
		<div class="principal">
			<?php 
				$nome = $_GET["nome"];
				$preco = $_GET["preco"];
				
				if (insereProduto($conexao, $nome, $preco)) { ?>
					<div class="alert alert-success" role="alert">
						<p>Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
					</div>
				<?php 
				} 
				else {
					$msg = mysqli_error($conexao);
				?>
					<div class="alert alert-danger" role="alert">
						<p>Produto <?= $nome; ?> não foi adicionado. <?= $msg?></p>
					</div>
				<?php
			}
			?>
		</div>
	</div>
<ol class="breadcrumb">
	<li><a href="produto-lista.php">Lista de Produtos</a></li>
	<li><a href="produto-formulario.php">Adicionar Produto</a></li>
</ol>


