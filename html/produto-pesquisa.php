<?php include ("header.php");
include("../admin/conecta.php");
include ("../admin/banco-produto.php");
$busca = $_POST['busca'];
$banco_busca = "SELECT * FROM produtos WHERE nome LIKE '%$busca%'";
$resultado_busca = mysqli_query($conexao,$banco_busca);
$row_produtos = mysqli_fetch_array($resultado_busca);?>
<div class="container-fluid">
	<h1 style="padding:3% 0%;"><strong>Produtos</strong></h1>
	<?php
	foreach ($row_produtos as $produto) :?>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="thumbnail">
					<img src="<?=$produto['nome_imagem']?>" class="img-thumbnail" alt="imagem_produto">
					<div class="caption">
						<h3><?=$produto['nome']?></h3>
						<p><?=substr($produto['descricao'], 0, 40)?></p>
						<p>Categoria: <?=$produto['categoria_nome']?></p>
						<h4>Preço: R$ <?=$produto['preco']?> </h4>
					</div>
				</div>
			</div>
	<?php endforeach ;?>
	<h3 class="col-xs-12 col-sm-12"> Não esqueça de olhar os nossos outros produtos! </h3>
	<?}
	?>
	<div class="row" style="padding-top: 20px;">
		<?php $produtos = listaProdutos($conexao);
		foreach ($produtos as $produto) :?>
		<div class="col-sm-6 col-md-4 col-lg-3">
			<div class="thumbnail">
				<img src="<?=$produto['nome_imagem']?>" class="img-thumbnail" alt="imagem_produto">
				<div class="caption">
					<h3><?=$produto['nome']?></h3>
					<p><?=substr($produto['descricao'], 0, 40)?></p>
					<p>Categoria: <?=$produto['categoria_nome']?></p>
					<h4>Preço: R$ <?=$produto['preco']?> </h4>
				</div>
			</div>
		</div>
	}
<?php endforeach?>
</div>	
</div>
<?php include 'footer.php';?>
