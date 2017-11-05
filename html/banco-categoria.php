<?php

function buscaCategoria($conexao, $id) {
	$query = "select * from categorias where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}
function listaCategorias($conexao) {
	$categorias = array();
	$query = "select * from categorias";
	$resultado = mysqli_query($conexao, $query);
	while ($categoria = mysqli_fetch_assoc($resultado)) {
		array_push($categorias, $categoria);
	}
	return $categorias;
}
function insereCategoria($conexao,$nome_categoria){
	$query = "insert into categorias (nome) values ('{$nome_categoria}')";
	return mysqli_query($conexao, $query);
}
function removeCategoria($conexao, $id) {
	$query = "delete from categorias where id = {$id}";
	return mysqli_query($conexao, $query);
}
function alteraCategoria($conexao, $id, $nome_categoria) {
	$query = "update categorias set nome = '{$nome_categoria}' where id = '{$id}'";
	return mysqli_query($conexao, $query);
}