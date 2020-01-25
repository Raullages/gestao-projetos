<?php include("conexao/conexao.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adicionar comentário</title>
	<link rel="stylesheet" href="css/comentarios.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="titulo">
	<h2>Observação:</h2>
	</div>
		
	<div class="comentario_fixo">
		<ul>
		<?php 
			$codigo = $_GET['codigo'];

			$comentario = $con->query("SELECT * FROM projeto ORDER BY hora WHERE id = $codigo ");
			$contar_comentario = mysqli_num_rows($comentario);

			if ($contar_comentario == 0) {
				echo "<li><strong>Sistema de comentarios - Em ".date('d/m/y H:i')."</strong> Disse:<span> Nenhum comentario postado, seja o primeiro!!</span></li>";
			}
			else{
		 
			while($linha = $comentario->fetch_array()){
				$operador = $linha['operador'];
				$observacao = $linha['observacao'];
				$data = $linha['hora'];
			
		?>

		<li>
			<strong>
				<?php echo $operador ?> Em <?php echo date('d/m/y - h:i',strtotime($data)); ?></strong> Disse:<span><?php echo $observacao ?></span></li>

		<?php 
		} }
		
		?>
		</ul>
		
	</div>
<form action="" name="formulario" method="POST">	
	<div class="comentario_novo">

		<textarea name="observacao" id="obs" cols="130" rows="7"></textarea>

		<span>RESPONSAVEL TÉCNICO:</span>
		<select name="seleciona-operador" class="selecao form-control" value="Operador" required>
			<option value="">--</option>
			<option>Raul</option>
			<option>Nilton</option>
		</select>

		<div class="botoes">
			<input type="button" id="gravar" class="btn gravar" value="Gravar">
			<input type="button" onclick="window.close();" class="btn sair form-control" value="Sair">
		</div>
	</div>
</form>


<script src="js/comentarios1.js" type="text/javascript"></script>
<script src="js/jquery-3.2.1.min.js"></script>

</body>
</html>	
		