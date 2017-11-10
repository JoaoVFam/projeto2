<?php include("header.php");
include("conecta.php");
include("banco-produto.php");
$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];
if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id)) {?>
	<div class="alert alert-success" role="alert">
		<p>Produto <?=$nome?>, <?=$preco?>, alterado com sucesso!</p>
	</div>
<?php } else { 
	$msg = mysqli_error($conexao);?>
	<div class="alert alert-danger" role="alert">
		<p>Produto <?=$nome;?> não alterado: <?=$msg?></p>
	</div>
<?php }
include("footer.php");?>
