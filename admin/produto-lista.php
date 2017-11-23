<?php require_once("header.php");
require_once("banco-produto.php");
if(array_key_exists("removido", $_GET) && $_GET["removido"]==true) {?>
<div class="alert alert-success" role="alert">
	<p>Produto removido com sucesso!</p>
</div>
<?php }?>
<div class="panel panel-default">
	<div class="panel-heading"><h4>Lista de Produtos</h4></div>
	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<?php $produtos = listaProdutos($conexao);
			foreach ($produtos as $produto) :?>
			<tr>
				<td><?=$produto['nome']?></td>
				<td><?=$produto['preco']?></td>
				<td><?=substr($produto['descricao'], 0, 40)?></td>
				<?php if($produto['categoria_id']!=NULL) {?>
				<td><?=$produto['categoria_nome']?></td>
				<?php } elseif ($produto['categoria_id']==NULL) {?>
				<td>Produto sem categoria</td>
				<?php }?>
				<td class="col-lg-1">
					<form action="produto-detalhes.php" method="post">
						<input type="hidden" name="id" value="<?=$produto['id']?>">
						<button class="btn btn-primary" style="transform: translateY(25%);width:100%;">Detalhes</button>
					</form>
				</td>
				<td><a class="col-lg-1 btn btn-primary" style="transform: translateY(25%);width: 100%;" href="produto-altera-formulario.php?id=<?=$produto['id']?>">Alterar</a></td>
				<td class="col-lg-1">
					<form action="remove-produto.php" method="post">
						<input type="hidden" name="id" value="<?=$produto['id']?>">
						<button class="btn btn-danger" style="transform: translateY(25%);width:100%;">Remover</button>
					</form>
				</td>
			</tr>
		<?php endforeach?>
	</table>
</div>
</div>
<?php include("footer.php");?>