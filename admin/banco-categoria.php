<?php
function listaCategorias($conexao) {
	$categorias = array();
	$resultado = mysqli_query($conexao, "select * from categorias");
	while($categoria = mysqli_fetch_assoc($resultado)) {
		array_push($categorias, $categoria);
	}
	return $categorias;
}
function insereCategoria($conexao, $nome){
	$query = "insert into categorias (nome) values ('{$nome}')";
	return mysqli_query($conexao, $query);
}
function alteraCategoria($conexao, $id, $nome) {
	$query = "update categorias set nome = '{$nome}' where id = {$id}";
	return mysqli_query($conexao, $query);
}
function buscaCategoria($conexao, $id) {
	$query = "select * from categorias where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}
function removeCategoria($conexao, $id) {
	$query = "delete from categorias where id = {$id}";
	return mysqli_query($conexao, $query);
}