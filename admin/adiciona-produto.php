<?php include("header.php");
include("conecta.php");
include("banco-produto.php");
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];
if(!empty($_FILES['nome_imagem']['name']) && preg_match('/^image\/(pjpeg|jpeg|png|gif|bmp|jpg)$/', $_FILES['nome_imagem']['type'])) {  //Teste se uma imagem válida foi enviada
	$nome_imagem = $_FILES['nome_imagem']['name'];
	$destino = 'anexo/' . $_FILES['nome_imagem']['name']; 
	$imagem_tmp = $_FILES['nome_imagem']['tmp_name'];
	if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $nome_imagem)) { //Teste se foi possível adicionar o produto sem erro
		move_uploaded_file($imagem_tmp, $destino);?>
		<div class="alert alert-success" role="alert">
			<p>Produto <?=$nome?>, <?=$preco?>, adicionado com sucesso!</p>
		</div> <?php   
		die();
	} 
	else { //Se não foi possível adicionar o produto exibe uma menssagem de erro
		$msg = mysqli_error($conexao);?>
		<div class="alert alert-danger" role="alert">
			<p>Produto <?=$nome;?> não adicionado: <?=$msg?></p>
		</div> <?php 	
		die();
	}
}
elseif (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, 'default.png')) { //Se não foi enviada uma imagem para essa página tentamos inserir a imagem default.jpg ?>
		<div class="alert alert-success" role="alert">
			<p>Produto <?=$nome?>, <?=$preco?>, adicionado com sucesso!</p>
		</div> <?php 
} 
else { //Se não foi possível inserir o produto sem imagem exibe uma menssagem de erro
	$msg = mysqli_error($conexao);?>
	<div class="alert alert-danger" role="alert">
		<p>Produto <?=$nome;?> não adicionado: <?=$msg?></p>
	</div> <?php 
}
include("footer.php");?>

