<?php require_once("header.php");
require_once("logica-usuario.php");?>
<?php if(usuarioEstaLogado()) {?>
	<h1>Bem vindo!</h1>
<?php } else {?>
	<h1>Acesso Restrito</h1>
	<h2>Login</h2>
	<form action="login.php" method="post">
		<table class="table">
			<tr>
				<td>Email</td>
				<td><input class="form-control" type="email" name="email"></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input class="form-control" type="password" name="senha"></td>
			</tr>
			<tr>
				<td><button class="btn btn-primary">Login</button></td>
			</tr>
		</table>
	</form>
	
<?php }
include("footer.php");?>