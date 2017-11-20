<?php require_once("header.php");
require_once("banco-categoria.php");
$id = $_POST['id'];
$nome = $_POST['nome'];
if(alteraCategoria($conexao, $id, $nome)) { ?>
	<div class="alert alert-success" role="alert">
		<p>Categoria <?=$nome?> alterada com sucesso!</p>
	</div>
<?php } else {
	$msg = mysqli_error($conexao);?>
	<div class="alert alert-danger" role="alert">
		<p>Categoria <?=$nome?> não alterado: <?=$msg?></p>
	</div>
<?php }
include("footer.php");?>