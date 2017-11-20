<?php require_once("header.php");
require_once("banco-categoria.php");
$id = $_POST['id'];
removeCategoria($conexao, $id);
header("Location: categoria-lista.php?removido=true");
die();