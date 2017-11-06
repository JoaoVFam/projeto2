	<?php include("header.php");?>
	<?php include("conecta.php");?>
	<?php include("banco-produto.php");?>

	<div class="container">
		<div class="principal">
			<ol class="breadcrumb">
				<li><a href="produto-lista.php">Lista de Produtos</a></li>
				<li><a href="produto-formulario.php">Adicionar Produto</a></li>
			</ol>
			<?php 
				$id = $_POST["id"];
				$nome = $_POST["nome"];
				$preco = $_POST["preco"];
				$descricao = $_POST["descricao"];
				$categoria_id = $_POST['categoria_id'];
				if (alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id)) { ?>
					<div class="alert alert-success" role="alert">
						<p>Produto <?= $nome ?>, <?= $preco ?> Produto foi alterado. </p>
					</div>
				<?php 
				} 
				else {
					$msg = mysqli_error($conexao);
				?>
					<div class="alert alert-danger" role="alert">
						<p>Produto <?= $nome; ?> não foi alterado. <?= $msg?></p>
					</div>
				<?php
			}
			?>
		</div>
	</div>
