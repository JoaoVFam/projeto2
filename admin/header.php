<?php error_reporting(E_ALL ^ E_NOTICE);
require_once("logica-usuario.php");
require_once("mostra-alerta.php");?>
<html>
	<head>
		<meta charset="utf-8">
		<title>JF Alarmes - Área Administrativa</title>
		<link href="../assets/css/bootstrap.css" rel="stylesheet">
		<link href="../assets/css/estilo-banco-usuario.css" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-fixed-top navbar-inverse" style="background-color: #36454f">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        				<span class="sr-only">Toggle navigation</span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
      				</button>
					<a class="navbar-brand" href="../html/index.php" title="Voltar para a página principal">JF Alarmes</a>
				</div>
				<?php if(usuarioEstaLogado()) {?>
					<div class="collapse navbar-collapse" id="navbar">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Adicionar <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="categoria-formulario.php">Adicionar Categoria</a></li>
									<li><a href="produto-formulario.php">Adicionar Produto</a></li>
									<li><a href="usuario-formulario.php">Adicionar Usuário</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listas <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="categoria-lista.php">Categorias</a></li>
									<li><a href="produto-lista.php">Produtos</a></li>
									<li><a href="usuario-lista.php">Usuários</a></li>
								</ul>
							</li>
							<li><a href="logout.php">Sair</a></li>
						</ul>
					</div>
				<?php }?>
			</div>
		</nav>
		<div class="container">
			<div class="principal">
				<?php mostraAlerta("danger");?>