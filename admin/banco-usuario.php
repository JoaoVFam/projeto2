<?php
require_once("conecta.php");
function listaUsuarios($conexao) {
	$usuarios = array();
	$resultado = mysqli_query($conexao, "select * from usuarios");
	while($usuario = mysqli_fetch_assoc($resultado)){
		array_push($usuarios, $usuario);
	}
	return $usuarios;
}
function adicionaUsuario($conexao, $email, $senha) {
	$senhaMd5 = md5($senha);
	$email = mysqli_real_escape_string($conexao, $email);
	$query = "insert into usuarios (email, senha) values ('{$email}', '{$senhaMd5}')";
	return mysqli_query($conexao, $query);
}
function alteraUsuario($conexao, $id, $email, $senha) {
	$query = "update usuarios set email = '{$email}', senha = '{$senha}' where id = {$id}";
	return mysqli_query($conexao, $query);
}
function buscaUsuarioLogin($conexao, $email, $senha){
	$senhaMd5 = md5($senha);
	$email = mysqli_real_escape_string($conexao, $email);
	$query = "select * from usuarios where email='{$email}' and senha='{$senhaMd5}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
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