<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/estilo-header.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/estilo-home.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/estilo-localizacao.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/estilo-footer.css">
		<title>JF Alarmes</title>
		<link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png">
	</head>
	<body style="padding-top: 50px">
		<header>
			<nav class="navbar navbar-fixed-top navbar-inverse" style="background-color: #36454f">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					    </button>
						<a class="navbar-brand page-scroll" href=<?php if($home!=1){ echo "index.php";}?>#home>JF Alarmes</a>
					</div>
					<div class="collapse navbar-collapse" id="navbar">
						<ul class="nav navbar-nav links-nav">
							<li><a class="page-scroll" href=<?php if($home!=1){ echo "index.php";}?>#home>Home</a></li>
							<li><a class="page-scroll" href=<?php if($home!=1){ echo "index.php";}?>#quemsomos>Quem somos</a></li>
							<li><a href="produto.php">Produtos</a></li>
							<li><a class="page-scroll" href=<?php if($home!=1){ echo "index.php";}?>#localização>Localização</a></li>
							<li><a class="page-scroll" href=<?php if($home!=1){ echo "index.php";}?>#contato>Contato</a></li>
		    			</ul>
			    		<form name="searchform" method="post" action="produto-pesquisa.php" class="navbar-form navbar-left">
							<div class="form-group">
								<div class="input-group">
									<input type="text" name="busca" class="form-control" placeholder="Pesquisa">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-default" aria-label="Left Align">
									 		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
										</button>
									</span>
								</div>
							</div>
						</form>
						<ul class="nav navbar-nav navbar-right">
							<li><a class="glyphicon glyphicon-lock" href="../admin/index.php" title="Acesso Restrito"></a></li>
						</ul>
		    		</div>
				</div>
			</nav>	
		</header>
		