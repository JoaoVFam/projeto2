<?php include("header.php");
include("conecta.php");
include("banco-categoria.php");
$id = $_GET['id'];
$categoria = buscaCategoria($conexao, $id);?>
<h1>Alterar Categoria</h1>
<form action="altera-categoria.php" method="post">
	<input type="hidden" name="id" value="<?=$categoria['id']?>">
	<table class="table">
		<tr>
			<td>Nome</td>
			<td><input class="form-control" type="text" name="nome" value="<?=$categoria['nome']?>"><br/></td>
		</tr>
		<tr>
			<td><button class="btn btn-primary" type="submit">Alterar</button></td>
		</tr>
	</table>
</form>
<?php include("footer.php");?>


