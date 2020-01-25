<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<title>Editar</title>
	
	<link rel="stylesheet" href="./../../assets/bootstrap/css/bootstrap.min.css">
	<script src="./../../assets/bootstrap/js/bootstrap.min.js"></script>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="./../../js/ajaxjquery.js"></script>	

</head>
<style>
	header{
		width: 100%;
		margin-bottom: 20px;
	}
	header h2{
	background-color: #337ab7;
	color: #fff;
	margin: 0px;
	padding: 20px;
	}
	.form-control{
		border-radius: 0px;
	}
	.btn{
		border-radius: 0px;
	}
	.bt-excluir{
		background-color: #ee0000;
		color: #fff;
	}
	.bt-excluir:hover{
		background-color: #dd0000;
		color: #fff;
	}
	.bt-voltar{
		background-color: #777;
		color: #fff;

	}
	.bt-voltar:hover{
		background-color: #333;
		color: #fff;
	}
	.salvar{
		background-color: #337ef7;
		color: #fff;
	}
	.salvar:hover{
		background-color: #337cd7;
		color: #fff;
	}
	textarea{
		margin-top: 25px;
	}
</style>
<body>
	<nav class="nav ">
		<header class="navbar-header">
			<h2>Editar Projetos</h2>
		</header>
	</nav>	

	<div class="container">
	
	<?php 
		require_once("./../../conexao/conexao.php");
		
		$codigo = $_GET['codigo'];

		$result = $con->query("SELECT * FROM projeto where id = '$codigo'");
      
                while($linha = $result->fetch_array()){
						$id = $linha['id'];
                        $nome = $linha['nome_proj'];
                        $responsavel = $linha['operador'];
                        $telefone = $linha['telefone'];
						$tipo = $linha['tipo'];
                        $dt_inicio = $linha['data_inicio'];
                        $dt_termino = $linha['data_fim'];
                        $status = $linha['info_status'];
                        $protocolo = $linha['protocolo'];
                        $observacao = $linha['observacao'];
				    }

	?>
                    
				
		
	</div>
<div class="container">
	<div class="container-fluid">
		<form action="../update/update.php?codigo=<?php echo $id ?>" method="post">
			<div class=" form-group" >
				<div class="col-md-12">
					<div class="col-md-1">
						<label class="">ID:</label>
						<input type="text" class="form-control" name="id" value="<?php echo $id?>" disabled>
					</div>

					<div class="col-md-4">
						<label>Nome:</label>
						<input type="text" class="form-control" name="nome" value="<?php echo $nome?>">
					</div>

					<div class="col-md-4">
						<label>Responsavel:</label>
						<input type="text" class="form-control" name="responsavel" value="<?php echo $responsavel ?>">
					</div>
					<div class="col-md-3">
						<label>Telefone:</label>
						<input type="text" class="form-control" name="telefone" value="<?php echo $telefone?>">
					</div>
				</div>

				<div class="col-md-12">

				<div class="col-md-3">
					<label>Tipo de Projeto:</label>
					<div class="dropdown">
	                    <select type="button" label="tipo" class="form-control btn btn-default dropdown-toggle" data-toggle="dropdown" value="" name="tipo" required>Tipo de Projeto
	                            <span class="caret"></span>

	                            <option value="<?php echo $tipo ?>"><?php echo $tipo ?></option>
	                            <option value="">--</option>
	                            <option value="Aprovacão Inicial">Aprovação Inicial</option>
	                            <option value="Regularizacao">Regularização</option>
	                            <option value="Imagens 3D">Imagens 3D</option>
	                            <option value="Videos 3D">Videos 3D</option>
	                            <option value="Outros">Outros</option>
	                         
	                    </select>
	                </div>
				</div>

				<div class="col-md-3">
					<label>Data Ínicio:</label>
					<input type="date" class="form-control" name="dt_inicio" value="<?php echo $dt_inicio?>">
				</div>
				<div class="col-md-3">
					<label>Data Término:</label>
					<input type="date" class="form-control" name="previsao" value="<?php echo $dt_termino?>">
				</div>
				<div class="col-md-3">	
					<div class="">
							<label for="">Status</label>
							<select type="button" label="status" name="status" placeholder="Status" class="form-control btn btn-default" required>
							<option value="<?php echo $status ?>" ><?php echo $status ?></option>
							<option value="">--</option>
							<option value="Concluido" >Concluido</option>
							<option value="Pendente">Pendente</option>
							</select>
					</div>
	            </div>

	           
	            </div>
	            

	            <div class="col-md-12">
	                <div class="col-md-4">
						<label>Protocolo:</label>
						
						<input type="text" class="form-control" name="protocolo" value="<?php echo $protocolo?>"><br>

						<input type="submit" value="Salvar" style="margin-top: 20px;" class="col-md-12 btn salvar">
						
						<input type="button" onclick="excluirProjeto(<?php echo $id ?>)" class="btn bt-excluir form-control" style="margin-top: 20px;" value="Apagar Projeto">

						<input type="button" onclick="window.close();" style="margin-top: 20px;" value="Voltar" class="col-md-12 btn bt-voltar">
				
					</div>
					 <div class="col-md-8">
	            		<textarea style="text-align: left;" name="observacao" class="form-control" id="" cols="30" rows="10">
	            			<?php echo nl2br($observacao) ?>
	            		</textarea>
	            	</div>
				</div>
			</div>
		</form>	
	</div>
</div>

<script src="./../../js/funcoes.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="js/jquery-3.2.0.min.js"></script>
</body>
</html>