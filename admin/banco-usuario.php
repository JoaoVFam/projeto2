<?php
function listaUsuarios($conexao) {
	$usuarios = array();
	$resultado = mysqli_query($conexao, "select * from usuarios");
	while($usuario = mysqli_fetch_assoc($resultado)){
		array_push($usuarios, $usuario);
	}
	return $usuarios;
}
function adicionaUsuario($conexao, $email, $senha) {
	$query = "insert into usuarios (email, senha) values ('{$email}', '{$senha}')";
	return mysqli_query($conexao, $query);
}
function alteraUsuario($conexao, $id, $email, $senha) {
	$query = "update usuarios set email = '{$email}', senha = '{$senha}' where id = {$id}";
	return mysqli_query($conexao, $query);
}
function buscaUsuario($conexao, $id) {
	$query = "select * from usuarios where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}
function removeUsuario($conexao, $id) {
	$query = "delete from usuarios where id = {$id}";
	return mysqli_query($conexao, $query);
}