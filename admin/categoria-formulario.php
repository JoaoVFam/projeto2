<?php include("header.php");
include("conecta.php");?>
<h1>Formulário de Categoria</h1>
<form action="adiciona-categoria.php" method="post">
	<table class="table">
		<tr>
			<td>Nome</td>
			<td> <input class="form-control" type="text" name="nome"></td>
		</tr>
		<tr>
			<td><input class="btn btn-primary" type="submit" value="Cadastrar" ></td>
		</tr>
	</table>
</form>
<?php include("footer.php");?>
