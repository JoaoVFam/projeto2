<?php include("header.php");
include("conecta.php");?>
<h1>Formulário de Usuário</h1>
<form action="adiciona-usuario.php" method="post">
	<table class="table">
		<tr>
			<td>e-mail</td>
			<td><input class="form-control" type="text" name="email"><br/></td>	
		</tr>
		<tr>
			<td>Senha</td>
			<td><input class="form-control" type="text" name="senha"><br/></td>	
		</tr>
		<tr>
			<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
		</tr>
	</table>
</form>
<?php include("footer.php");?>