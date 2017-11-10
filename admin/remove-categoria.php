<?php include("header.php");
include("conecta.php");
include("banco-categoria.php");
$id = $_POST['id'];
removeCategoria($conexao, $id);
header("Location: categoria-lista.php?removido=true");
die();