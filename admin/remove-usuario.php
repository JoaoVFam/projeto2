<?php require_once("header.php");
require_once("banco-usuario.php");
$id = $_POST['id'];
removeUsuario($conexao, $id);
header("Location: usuario-lista.php?removido=true");
die();