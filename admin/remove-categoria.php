<?php
$id = $_GET['id'];
removeProduto($conexao, $id);
header("Location: categoria-lista.php?removido=true");
die();
?>