<?php 
	include("./../conexao/conexao.php");
		$codigo = $_POST['ident'];

		$resultado = $con->query("SELECT * FROM historico WHERE id = $codigo ORDER BY data");
		$comentario = mysqli_num_rows($resultado);
					
		if(!$comentario == 0){

			while($linha = $resultado->fetch_array()){
				$observacao = $linha['descricao'];
				$operador = $linha['responsavel'];
				$hora = $linha['data'];
			?>
			
			<li>
				<strong>
					<?php echo $operador ?> 
					Em 
					<?php echo date('d/m/y - h:i',strtotime($data)); ?>
				</strong> 
				Disse:
				<span>
					<?php echo $observacao ?>
				</span>
			</li>

		<?php }

		}else{
			echo "Nenhum Comentário Postado";
		}		
	
	?>