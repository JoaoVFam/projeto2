<?php require_once("header.php");
require_once("banco-categoria.php");
if(array_key_exists("removido", $_GET) && $_GET["removido"]==true) {?>
<div class="alert alert-success" role="alert">
	<p>Categoria removida com sucesso!</p>
</div>
<?php }?>
<div class="panel panel-default">
	<div class="panel-heading "><h4>Lista de Categorias</h4></div>
	<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<?php $categorias = listaCategorias($conexao);
				foreach ($categorias as $categoria) :?>
				<tr>
					<td><?=$categoria['nome']?></td>
					<td><a class="btn btn-primary" href="categoria-altera-formulario.php?id=<?=$categoria['id']?>">Alterar</a></td>
					<td>
						<form action="remove-categoria.php" method="post">
							<input type="hidden" name="id" value="<?=$categoria['id']?>">
							<button class="btn btn-danger">Remover</button>
						</form>
					</td>
				</tr>
			<?php endforeach?>
		</table>
	</div>
</div>
<?php include("footer.php");?>