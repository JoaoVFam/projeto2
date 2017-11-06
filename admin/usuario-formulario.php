<?php include("header.php");
include("conecta.php");
?>
<h1>Formulário de usuários</h1>
<form action="altera-usuario.php" method="post">
	<table class="table">
		<tr>
			<td>Nome</td>
			<td><input class="form-control" type="text" name="nome"><br/></td>	
		</tr>
		<tr>
			<td>e-mail</td>
			<td><input class="form-control" type="number" name="email"><br/></td>	
		</tr>
		<tr>
			<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
		</tr>
	</table>
</form>
<?php include("footer.php");?>