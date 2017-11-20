<?php require_once("header.php");
require_once("banco-categoria.php");
$nome = $_POST['nome'];
if(insereCategoria($conexao, $nome)) {?>
	<div class="alert alert-success" role="alert">
		<p>Categoria <?=$nome?> adicionada com sucesso!</p>
	</div>
<?php } else {
	$msg = mysqli_error($conexao);?>
	<div class="alert alert-danger" role="alert">
		<p>Categoria <?=$nome;?> não adicionada: <?=$msg?></p>
	</div>
<?php }
include("footer.php");?>