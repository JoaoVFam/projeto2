<?php include("header.php");
include("conecta.php");
include("banco-usuario.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
if(alteraUsuario($conexao, $nome, $email, $senha)) { ?>
	<p class="text-success">Usuario <?= $nome ?> alterado com sucesso!</p>
<?php } else { 
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">Usuario <?= $nome ?> não alterado: <?= $msg?></p>
<?php }
?>
<?php include("footer.php");?>