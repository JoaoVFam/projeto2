<?php $home = 0; 
include ("header.php");
include("../admin/conecta.php");
include ("../admin/banco-produto.php");
$busca = $_POST['busca'];?>
<div class="container-fluid">
	<h1 style="padding:20px 0px; margin-top: 10px;"><strong>Resultados</strong></h1>
	<div class="row">
	<?php $produtos = listaProdutosBusca($conexao,$busca);
	foreach ($produtos as $produto) :?>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="thumbnail">
					<img src="../admin/img/<?=$produto['nome_imagem']?>" style="width:256px; height:256px" class="img-thumbnail" alt="imagem_produto">
					<div class="caption">
						<h3><?=$produto['nome']?></h3>
						<p><?=substr($produto['descricao'], 0, 40)?></p>
						<p>Categoria: <?=$produto['categoria_nome']?></p>
						<h4>Preço: R$ <?=$produto['preco']?> </h4>
					</div>
				</div>
			</div>
	<?php endforeach ;?>
	</div>
	<h3 style="clear: both;"> Não esqueça de olhar os nossos outros produtos! </h3>
	<?}
	?>
	<div class="row" style="padding-top: 20px;">
		<?php $produtos = listaProdutos($conexao);
		foreach ($produtos as $produto) :?>
		<div class="col-sm-6 col-md-4 col-lg-3">
			<div class="thumbnail">
				<img src="../admin/img/<?=$produto['nome_imagem']?>" style="width:256px; height:256px" class="img-thumbnail" alt="imagem_produto">
				<div class="caption">
					<h3><?=$produto['nome']?></h3>
					<p><?=substr($produto['descricao'], 0, 40)?></p>
					<p>Categoria: <?=$produto['categoria_nome']?></p>
					<h4>Preço: R$ <?=$produto['preco']?> </h4>
				</div>
			</div>
		</div>
<?php endforeach?>
</div>	
</div>
<?php include 'footer.php';?>
