<?php include("header.php");
include("conecta.php");
include("banco-produto.php");
$id = $_GET['id'];
$usuario = buscaUsuario($conexao, $id);
?>
<h1>Alterar usuario</h1>
<form action="altera-usuario.php" method="post">
	<input type="hidden" name="id" value="<?=$usuario['id']?>">
	<table class="table">
		<tr>
			<td>Nome</td>
			<td><input class="form-control" type="text" name="nome" value="<?=$usuario['nome']?>"><br/></td>	
		</tr>
		<tr>
			<td>e-mail</td>
			<td><input class="form-control" type="number" name="preco" value="<?=$usuario['email']?>"><br/></td>	
		</tr>
		<tr>
			<td><button class="btn btn-primary" type="submit">Alterar</button></td>
		</tr>
	</table>
</form>
<?php include("footer.php");?>