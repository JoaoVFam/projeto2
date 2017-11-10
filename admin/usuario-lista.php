<?php include("header.php");
include("conecta.php");
include("banco-usuario.php");
if(array_key_exists("removido", $_GET) && $_GET["removido"]==true) {?>
	<div class="alert alert-success" role="alert">
		<p>Usuário removido com sucesso!</p>
	</div>
<?php }?>
<div class="panel panel-default">
 	<div class="panel-heading"><h4>Lista de Usuários</h4></div>
	<table class="table table-striped table-bordered">
		<?php $usuarios = listaUsuarios($conexao);
		foreach($usuarios as $usuario) :?>	
			<tr>
				<td><?=$usuario['email']?></td>
				<td><?=$usuario['senha']?></td>
				<td><a class="btn btn-primary" href="usuario-altera-formulario.php?id=<?=$usuario['id']?>">Alterar</a></td>
				<td>
					<form action="remove-usuario.php" method="post">
						<input type="hidden" name="id" value="<?=$usuario['id']?>">
						<button class="btn btn-danger">Remover</button>
					</form>
				</td>
			</tr>
		<?php endforeach?>
	</table>
</div>
<?php include("footer.php");?>