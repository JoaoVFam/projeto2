<?php include("header.php");
include("conecta.php");
include("banco-produto.php");
if(array_key_exists("removido", $_GET) && $_GET["removido"]==true) {?>
 	<div class="alert alert-success" role="alert">
		<p>Produto removido com sucesso</p>
	</div>
<?php }?>
<div class="panel panel-default">
 	<div class="panel-heading"><h4>Lista de Produtos</h4></div>
	<table class="table table-striped table-bordered">
		<?php $produtos = listaProdutos($conexao);
		foreach ($produtos as $produto) {?>
			<tr>
				<td><?=$produto['nome']?></td>
				<td><?=$produto['preco']?></td>
				<td><?=$produto['categoria_nome']?></td>
				<td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">Alterar</a></td>
				<td>
					<form action="remove-produto" method="post">
						<input type="hidden" name="id" value="<?=$produto['id']?>">
						<button class="btn btn-danger">Remover</button>
					</form>
				</td>
				<td><a class="btn btn-info" href="produto-detalhes.php?id=<?=$produto['id']?>">Informações</a></td>
			</tr>
		<?php }?>
	</table>
</div>