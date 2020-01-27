<?php 
	
	include("./../conexao/conexao.php");
	require_once("./../validando_sessao.php");

	if(isset($_GET['sair'])){
		session_destroy();
		header("Location: ./../index.php");
	}
	
?>

<!DOCTYPE html>

<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title src="img/Logo.png">Incentiva Construtora</title>

		<link rel="stylesheet" href="./../assets/bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet" href="../assets/css/novo_estilo.css">
		<script src="./../js/ajaxjquery.js"></script>
	</head>

	<body>

		<div class="container-fluid">
			<div>
				<?php include('./components/cabecalho/main.php') ?>
			</div>

			<div class="row form-group" style="height: 100vh; 
											position: fixed">

				<div class="col-xs-8" style="overflow-y: scroll; 
											position: relative; 
											height: 100%; 
											padding-top: 10px; 
											padding-bottom: 20px;">
					<div class="col-xs-12 tabela table-responsive ">
						<a target="_blank" 
							onclick="window.open(this.href,'Editar','width=1024px, height=520px'); return false;" 
							href="./modules/projetos/cadastro/main.php" 
							class="btn btn-primary btn-xs cadastrar" 
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Cadastrar um novo projeto">
							CADASTRAR
						</a>
						<hr style="margin: 8px 0px">
						<table class="table table-hover table-condensed">
							<thead>
								<tr>
									<th class="text-center">Projeto</th>
									<th class="text-center">Responsavel</th>
									<th class="text-center">Telefone</th>
									<th class="text-center">Status</th>
									<th class="text-center">Protocolo</th>
									<th class="text-center">Editar</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$result = $con->query("SELECT * FROM projeto");

									while($linha = $result->fetch_array()){
								?>
								<tr onclick="exibeInformacaoProjeto(<?php echo $linha['id'] ?>)" class="info-projeto">
									<td class="text-center" ><?php echo $linha['nome_proj'] ?></td>
									<td class="text-center" ><?php echo $linha['operador'] ?></td>
									<td class="text-center" ><?php echo $linha['telefone'] ?></td>
									<td class="text-center" ><?php echo $linha['info_status'] ?></td>
									<td class="text-center" ><?php echo $linha['protocolo'] ?></td>
									<td class="text-center">
										<a target='_blank'
										onclick="window.open(this.href,'Editar','width=1024px, height=640px'); return false;"
										href="./modules/projetos/cadastro/editar.php?codigo=<?php echo $linha['id'] ?>">
										<span class="glyphicon glyphicon-pencil editar" aria-hidden="true" title="Editar"></span>
										</a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>

					</div>
					<div class="col-xs-12">
						<div>
							<?php include('./components/links-prefeitura/main.html') ?>
						</div>

						<div>	
							<?php include('./components/rodape/main.html') ?>
						</div>
					</div>
				</div>
				
				<div class="col-xs-4" style="padding-bottom: 40px;
										overflow-y: scroll; 
										position: relative; 
										height: 100%; 
										padding-top: 10px">
					<div id="card-informacao"></div>
				</div>
				
			</div>

		</div>

		<script src="./../js/funcoes.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="js/jquery-3.2.0.min.js"></script>
	</body>
</html>
