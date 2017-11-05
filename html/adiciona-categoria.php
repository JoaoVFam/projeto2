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
			<li><a href="adiciona-categoria.php">Adicionar Categoria</a><li>
		</ol>
		<?php 
		$nome_categoria = $_POST["nome"];
		if (insereCategoria($conexao, $nome_categoria)) { ?>
			<div class="alert alert-success" role="alert">
				<p>Categoria <?= $nome_categoria ?>, adicionado com sucesso!</p>
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