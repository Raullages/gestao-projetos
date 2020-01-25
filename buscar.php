<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Incentiva Construtora</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	

<link rel="stylesheet" href="css/estilo-menu.css">

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

</head>
<body>

<header class="container-fluid">
				<div class="">
					<ul class="nav nav-pills pull-right">
						<li><a href="index.php">HOME</a></li>
						<li><a href="#prefeitura">PREFEITURA</a></li>
						<li><a href="#">CONTATO</a></li>
					</ul>
				</div>
	<div class="row-fluid menu">
		<a href="" class="navbar-brand">Incentiva Construtora</a>	
		<form action="buscar.php" method="post">
			<div class="input-group col-xs-12 col-md-4 col-md-offset-4 pesquisa">
				<input type="text" name="busca" placeholder="Pesquise pelo Protocolo" class="form-control">
					<span class="input-group-btn">
						<button class="btn btn-info" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
					</span>
			</div>
		</form>
	</div>
</header>
	<div class="container-fluid tabela">
		<table class="table table-hover" >
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome Projeto</th>
					<th>Responsavel</th>
					<th>Telefone</th>
					<th>Lote</th>
					<th>Quadra</th>
					<th>Logradouro</th>
					<th>Bairro</th>
					<th>Tipo</th>
					<th>Data Inicio</th>
					<th>Data Término</th>
					<th>Status</th>
					<th>Protocolo</th>
				</tr>
			</thead>	
				<tbody>
				<?php 
		//conexao com o banco
		$servidor = 'localhost';
		$usuario = 'root';
		$senha = '';
		$banco = 'cadastro';
		$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
		$selecao = mysqli_select_db($conexao,$banco);
		
		//atribui a consulta em uma variavel
		$busca = mysqli_real_escape_string($conexao,$_POST['busca']);
		$todos = 'tudo';
		
		/*if(!empty($busca)){
			if(is_numeric($busca))
				$result = mysqli_query($conexao,"SELECT * FROM projeto where protocolo like '%".$busca."%'");
				$linha = mysqli_num_rows($result);
		}else{
			header("location: http://localhost/Incentiva%20Construtora/");
			exit;
		}
		*/
		if(!empty($busca)){
				$result = mysqli_query($conexao,"SELECT * FROM projeto where info_status like '%".$busca."%' limit 7");
				$linha = mysqli_num_rows($result);
		}else{
			header("location: http://localhost/Incentiva%20Construtora/");
			exit;
		}
		
        if ($linha > 0){
                while($linha = mysqli_fetch_array($result)){
						$id = $linha['id'];
                        $nome = $linha['nome_proj'];
                        $responsavel = $linha['nome_resp'];
                        $telefone = $linha['telefone'];
                        $lote = $linha['lote'];
                        $quadra = $linha['quadra'];
						$logradouro = $linha['logradouro'];
                        $bairro = $linha['bairro'];
						$tipo = $linha['tipo'];
                        $dt_inicio = $linha['data_inicio'];
                        $dt_termino = $linha['data_fim'];
                        $status = $linha['info_status'];
                        $protocolo = $linha['protocolo'];
                        
                        echo "<tr>"; 
						echo "<td><a target='_blank' href='./tabela/editar.php?codigo=$id'>".$id."</td>";
                        echo "<td>".$nome."</td>";
                        echo "<td>".$responsavel."</td>";
                        echo "<td>".$telefone."</td>";
                        echo "<td>".$lote."</td>";
                        echo "<td>".$quadra."</td>";
                        echo "<td>".$logradouro."</td>";
						echo "<td>".$bairro."</td>";
						echo "<td>".$tipo."</td>";
                        echo "<td>".$dt_inicio."</td>";
                        echo "<td>".$dt_termino."</td>";
                        echo "<td>".$status."</td>";
                        echo "<td>".$protocolo."</td>";
                        echo "</tr>";
                }
        }
	
?>     
				
				</tbody>
			</table>
			
	</div>
	<div class="container-fluid" id="botoes">
			<div class="col-md-12">
			<a href="index.php"><button type="button" class="btn btn-warning" >Voltar</button></a>
		<!--	<a target="_blank" href=""><button type="button" class="btn btn-warning">Alterar</button></a> -->
			</div>
			
	</div>
	<!-- Rodapé -->
	<div class="container-fluid rodape">
		<footer>
			<p>copyright °° Incentiva Construtora Ltda</p>
		</footer>
	</div>
	
</body>
</html>
