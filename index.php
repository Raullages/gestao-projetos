<?php
	session_start(); 
	include("conexao/conexao.php"); 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="pragma" content="no-cache">
	<title>Login</title>
	<link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.css">
	<script src="./assets/bootstrap/js/bootstrap.min.js"></script>

</head>
<body onload="focus();">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-3" >
				<h3>Login</h3>
				<form class="row" action="validacao.php" name="login" method="POST">
					
					<div class="col-xs-12 form-group">
						<label>Nome:</label>
						<input type="text" name="nome" class="input-sm form-control" minlength="8">
					</div>
					
					<div class="col-xs-12 form-group">
						<label>Senha:</label>
						<input type="password" class="input-sm form-control" name="senha" maxlength="8" minlength="6">
					</div>
					
					<div class="col-xs-12 form-group" id="enviar">
						<button type="button" 
							class="btn btn-primary btn-sm btn-block" 
							value="Entrar" 
							onclick="validacao();">
							Entrar
							<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
						</button>
					</div>

					<div class="col-xs-12">
						<a href="./cadastro/usuario/main.php" id="cadastrar" class="btn btn-default btn-sm btn-block">Cadastrar RT</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	<script src="js/funcoes.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	
</body>
</html>
