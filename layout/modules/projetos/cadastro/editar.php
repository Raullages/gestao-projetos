<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<title>Editar</title>
	
	<link rel="stylesheet" href="./../../../../assets/bootstrap/css/bootstrap.min.css">
	<script src="./../../../../assets/bootstrap/js/bootstrap.min.js"></script>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="./../../js/ajaxjquery.js"></script>	

</head>
<body>
<?php 
	
	include('./../../../../models/projeto/main.php');

	$projeto = new Projeto();

	$item = $projeto->getProjeto($_GET['codigo']);

?>	

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<h3>Editar Projeto</h3>
		</div>
	</div>
	<hr style="margin: 8px 0px">
	<form action="#" method="post">
		<div>
			<div class="row form-group">
				<div class="col-md-4">
					<label>Nome:</label>
					<input type="text" class="input-sm form-control" name="nome" value="<?php echo $item->nome_proj ?>">
				</div>

				<div class="col-md-4">
					<label>Responsavel:</label>
					<input type="text" class="input-sm form-control" name="responsavel" value="<?php echo $item->operador ?>">
				</div>
				<div class="col-md-4">
					<label>Telefone:</label>
					<input type="text" class="input-sm form-control" name="telefone" value="<?php echo $item->telefone ?>">
				</div>
			</div>

			<div class="row form-group">

				<div class="col-md-4">
					<label>Tipo de Projeto:</label>
					<div >
						<select class="input-sm form-control" data-toggle="dropdown" value="" name="tipo" required>						
							<option value="">ESCOLHA</option>
							<option value="Aprovacão Inicial">Aprovação Inicial</option>
							<option value="Regularizacao">Regularização</option>
							<option value="Imagens 3D">Imagens 3D</option>
							<option value="Videos 3D">Videos 3D</option>
							<option value="Outros">Outros</option>
						</select>
					</div>
				</div>

				<div class="col-md-4">
					<label>Data Ínicio:</label>
					<input type="date" class="input-sm form-control" name="dt_inicio" value="<?php echo $item->data_inicio ?>">
				</div>
				<div class="col-md-4">
					<label>Data Término:</label>
					<input type="date" class="input-sm form-control" name="previsao" value="<?php echo $item->data_fim ?>">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-4">	
					<label for="">Status</label>
					<select label="status" name="status" placeholder="Status" class="input-sm form-control" required>
						<option value="<?php echo $item->info_status ?>" ><?php echo $item->info_status ?></option>
						<option value="">--</option>
						<option value="Concluido" >Concluido</option>
						<option value="Pendente">Pendente</option>
					</select>
				</div>
				<div class="col-md-4">
					<label>Protocolo:</label>
					<input type="text" class="input-sm form-control" name="protocolo" value="<?php echo $item->protocolo?>"><br>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-xs-12">
					<label>Observação:</label>
					<textarea name="observacao" class="input-sm form-control" rows="4">
						<?php echo nl2br($item->observacao) ?>
					</textarea>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-4">
					<button class="btn btn-success btn-sm btn-block" type="submit">
						SALVAR
					</button>
			
				</div>
				<div class="col-xs-4">
					<button type="button" class="btn btn-danger btn-sm btn-block" onclick="excluirProjeto(<?php echo $item->id ?>)">
						EXCLUIR
					</button>
				</div>
				<div class="col-xs-4">
					<button class="btn btn-sm btn-default btn-block" onclick="window.close()">
						CANCELAR
					</button>
				</div>
			</div>
		</div>
	</form>	

</div>

<script src="./../../../../js/funcoes.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="./../../../../js/jquery-3.2.0.min.js"></script>
</body>
</html>