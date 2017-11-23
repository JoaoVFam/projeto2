<?php require_once("header.php");
require_once("banco-usuario.php");
if(array_key_exists("removido", $_GET) && $_GET["removido"]==true) {?>
	<div class="alert alert-success" role="alert">
		<p>Usuário removido com sucesso!</p>
	</div>
<?php }?>
<div class="panel panel-default">
 	<div class="panel-heading"><h4>Lista de Usuários</h4></div>
 		<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<?php $usuarios = listaUsuarios($conexao);
				foreach($usuarios as $usuario) :?>	
					<tr>
						<td><?=$usuario['email']?></td>
						<td type="password"><?=$usuario['senha']?></td>
						<td class="col-lg-2"><a style="transform: translateY(25%);width:100%" class="btn btn-primary" href="usuario-altera-formulario.php?id=<?=$usuario['id']?>">Alterar</a></td>
						<td class="col-lg-2">
							<form action="remove-usuario.php" method="post">
								<input type="hidden" name="id" value="<?=$usuario['id']?>">
								<button class="btn btn-danger" style="transform: translateY(25%);width:100%">Remover</button>
							</form>
						</td>
					</tr>
				<?php endforeach?>
			</table>
		</div>
</div>
<?php include("footer.php");?>