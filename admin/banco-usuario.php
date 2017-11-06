<?php
function listaUsuarios($conexao){
	$usuarios = array();
	$resultado = mysqli_query($conexao, "select * from usuarios");
	while($usuario = mysqli_fetch_assoc($resultado)){
		array_push($usuarios, $usuario);
	}
	return $usuarios;
}
function adicionaUsuario($conexao, $nome, $email, $senha) {
	$query = "insert into usuarios (nome, email) values ('{$nome}', '{$email}')";
	return mysqli_query($conexao, $query);
}
function alteraUsuario($conexao, $nome, $email, $senha) {
	$query = "update usuarios set nome = '{$nome}', email = '{$email}'";
	return mysqli_query($conexao, $query);
}
function buscaUsuario($conexao, $id) {
	$query = "select * from usuarios where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}
function removeUsuario($conexao, $id){
	$query = "delete from usuarios where id = {$id}";
	return mysqli_query($conexao, $query);
}