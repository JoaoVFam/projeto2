<?php include("header.php");
include("conecta.php");
include("banco-usuario.php");
$email = $_POST['email'];
$senha = $_POST['senha'];
if(adicionaUsuario($conexao, $email, $senha)) {?>
	<div class="alert alert-success" role="alert">
		<p>Usuario <?=$email?> adicionado com sucesso!</p>
	</div>
<?php } else { 
	$msg = mysqli_error($conexao);?>
	<div class="alert alert-danger" role="alert">
		<p>Usuario <?=$email;?> não adicionado: <?=$msg?></p>
	</div>
<?php }
include("footer.php");?>