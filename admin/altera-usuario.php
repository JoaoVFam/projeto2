<?php require_once("header.php");
require_once("banco-usuario.php");
$id = $_POST['id'];
$email = $_POST['email'];
$senha = $_POST['senha'];
if(alteraUsuario($conexao, $id, $email, $senha)) {?>
	<div class="alert alert-success" role="alert">
		<p>Usuario <?=$email?> alterado com sucesso!</p>
	</div>
<?php } else { 
	$msg = mysqli_error($conexao);?>
	<div class="alert alert-danger" role="alert">
		<p>Produto <?=$email;?> não alterado: <?=$msg?></p>
	</div>
<?php }
include("footer.php");?>