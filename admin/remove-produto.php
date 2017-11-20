<?php require_once("header.php");
require_once("banco-produto.php");
$id = $_POST['id'];
removeProduto($conexao, $id);
header("Location: produto-lista.php?removido=true");
die();