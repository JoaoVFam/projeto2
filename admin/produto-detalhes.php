<?php require_once("header.php");
include("banco-produto.php");
$id = $_POST['id'];
$produto = buscaProduto($conexao, $id);
if($produto['categoria_id']!=NULL) {
	$categoria = buscaCategoriaProduto($conexao, $produto['categoria_id']);
}?>
<div class="panel panel-default">
 	<div class="panel-heading"><h4>Informações do Produto</h4></div>
	<table class="table">
		<tr>
			<td><img src="img/<?=$produto['nome_imagem']?>" class="img-thumbnail"></td>
			<td>Descrição: <?=$produto['descricao']?> </td>
		</tr>
		<tr>
			<td>Nome: <?=$produto['nome']?></td>
			<td>ID: <?=$produto['id']?></td>
		</tr>
			<td>Preço: <?=$produto['preco']?></td>
			<?php if($produto['categoria_id']!=NULL) {?>
				<td>Categoria: <?=$categoria['nome']?></td>
			<?php } elseif ($produto['categoria_id']==NULL) {?>
				<td>Categoria: Produto sem categoria</td>
			<?php }?>
		</tr>
	</table>
</div>
<?php include("footer.php");?>