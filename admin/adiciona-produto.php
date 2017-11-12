<?php include("header.php");
include("conecta.php");
include("banco-produto.php");
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];

if(!empty($_FILES['foto']['name']) && preg_match('/^image\/(pjpeg|jpeg|png|gif|bmp|jpg)$/', $_FILES['foto']['type'])) {
	$nomefoto = $_FILES['foto']['name'];
	$destino = 'anexo/' . $_FILES['foto']['name']; 
	$foto_tmp = $_FILES['foto']['tmp_name']; 
	if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $nomefoto)) {
		move_uploaded_file($foto_tmp, $destino);?>
		<div class="alert alert-success" role="alert">
			<p>Produto <?=$nome?>, <?=$preco?> adicionado com sucesso!</p>
		</div>
<?php } else {
	$msg = mysqli_error($conexao);?>
	<div class="alert alert-danger" role="alert">
		<p>Produto <?=$nome;?> não adicionado: <?=$msg?></p>
	</div>
<?php }
}
else{
	?>
	<div class="alert alert-danger" role="alert">
		<p>Produto não adicionado</p>
	</div>
<?php }

 
include("footer.php");?>