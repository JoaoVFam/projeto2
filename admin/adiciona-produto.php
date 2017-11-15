<?php include("header.php");
include("conecta.php");
include("banco-produto.php");
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];
if(!empty($_FILES['nome_imagem']['name']) && preg_match('/^image\/(pjpeg|jpeg|png|gif|bmp|jpg)$/', $_FILES['nome_imagem']['type'])) {
	$nome_imagem = $_FILES['nome_imagem']['name'];
	$destino = 'anexo/' . $_FILES['nome_imagem']['name']; 
	$imagem_tmp = $_FILES['nome_imagem']['tmp_name'];
	if(adicionaProduto($conexao, $nome, $preco, $descricao, $categoria_id, $nome_imagem)) {
		move_uploaded_file($imagem_tmp, $destino);?>
		<div class="alert alert-success" role="alert">
			<p>Produto <?=$nome?>, <?=$preco?>, adicionado com sucesso!</p>
		</div>
	<?php } else {
		$msg = mysqli_error($conexao);?>
		<div class="alert alert-danger" role="alert">
			<p>Produto <?=$nome;?> não adicionado: <?=$msg?></p>
		</div>
	<?php }
} else{ ?>
	<div class="alert alert-danger" role="alert">
		<p>Produto <?=$nome;?> não adicionado: <?=$msg?></p>
	</div>
<?php }
include("footer.php");?>