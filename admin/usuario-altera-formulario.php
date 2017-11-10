<?php include("header.php");
include("conecta.php");
include("banco-usuario.php");
$id = $_GET["id"];
$usuario = buscaUsuario($conexao, $id);?>
<h1>Alterar Usuário</h1>
<form action="altera-usuario.php" method="post">
	<input type="hidden" name="id" value="<?=$usuario['id']?>">
	<table class="table">
		<tr>
			<td>e-mail</td>
			<td><input class="form-control" type="text" name="email" value="<?=$usuario['email']?>"><br/></td>	
		</tr>
		<tr>
			<td>Senha</td>
			<td><input class="form-control" type="text" name="senha" value="<?=$usuario['senha']?>"><br/></td>	
		</tr>
		<tr>
			<td><button class="btn btn-primary" type="submit">Alterar</button></td>
		</tr>
	</table>
</form>
<?php include("footer.php");?>