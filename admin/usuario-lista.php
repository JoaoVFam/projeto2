<?php include("header.php");
include("conecta.php");
include("banco-usuario.php");?>
<?php
if(array_key_exists("removido", $_GET) && $_GET["removido"]==true) {
?>
	<p class="alert-success">Usuario removido com sucesso!</p>
<?php
}
?>
<table class="table table-striped table-bordered">
	<?php
		$usuarios = listaUsuarios($conexao);
		foreach($usuarios as $usuario) :
	?>	
	<tr>
		<td><?= $usuario['nome']?></td>
		<td><?= $usuario['email']?></td>
		<td><?= $usuario['senha']?></td>
		<td><a class="btn btn-primary" href="usuario-altera-formulario.php?id=<?=$usuario['id']?>">Alterar</a></td>
		<td>
			<form action="remove-usuario.php" method="post">
				<input type="hidden" name="id" value="<?=$usuario['id']?>">
				<button class="btn btn-danger">Remover</button>
			</form>
		</td>
	</tr>
	<?php
		endforeach
	?>
</table>
<?php include("footer.php");?>