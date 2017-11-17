<?php
function listaProdutos($conexao) {
	$produtos = array();
	$resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome from produtos as p join categorias as c on c.id=p.categoria_id");
	while($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}
	return $produtos;
}
function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $imagem_produto) {
	$query = "insert into produtos (nome, preco, descricao, categoria_id, imagem_produto) values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, '{$imagem_produto}')";
	return mysqli_query($conexao, $query);
}
function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id) {
	$query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id = {$categoria_id} where id = {$id}";
	return mysqli_query($conexao, $query);
}
function buscaProduto($conexao, $id) {
	$query = "select * from produtos where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}
function removeProduto($conexao, $id) {
	$query = "delete from produtos where id = {$id}";
	return mysqli_query($conexao, $query);
}
function alteraProdutoFoto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $imagem_produto) {
	$query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id = {$categoria_id}, imagem_produto = '{$imagem_produto}' where id = {$id}";
	return mysqli_query($conexao, $query);
}
function retornaCategoria($conexao, $categoria_id) {
	$query = "select * from categorias where id = {$categoria_id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}
function retornaUltimosProdutos($conexao) {
	$produtos = array();
	$resultado = mysqli_query($conexao, "select id from produtos limit 3");
	while($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}
	return $produtos;
}
