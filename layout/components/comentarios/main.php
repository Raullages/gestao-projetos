
<!DOCTYPE html>
<html lang="pt-BR">
<body>
	<div style="padding: 10px; 
		border: 1px solid #FFF; 
		background-color: #FFF; 
		border-radius: 5px;">
		<?php

			include("./../../../conexao/conexao.php");
			
			session_start();

			$codigo = $_GET['codigo'];

			if (!isset($codigo)) {
				echo "nao existe";
			}

			$resultado_projeto = $con->query("SELECT * FROM projeto WHERE id = $codigo");

			while($row = $resultado_projeto->fetch_array()){

				$id = $row['id'];
				$nome_proj = $row['nome_proj'];
				$telefone = $row['telefone'];
				$status = $row['info_status'];
				$operador = $row['operador'];
				$obsercao1 = $row['observacao'];

		?>
			<div>
				<h4 style="padding: 0px; margin-top: 0px">INFORMAÇÕES</h4>
			</div>
			<hr style="margin: 8px 0px"> 
			<div>
				<label>Nome Projeto:</label> <span><?php echo $nome_proj ?></span><br/>
				<label>Responsavel: </label> <span><?php echo $operador." - ".$telefone." " ?></span>
			</div>
			

			
		<?php } ?>

		<?php
			$resultado = $con->query("SELECT * FROM historico h INNER JOIN projeto p ON h.id = p.id WHERE h.id = $codigo ORDER BY data DESC");
			$comentario = mysqli_num_rows($resultado);
		?>
		<div class="obs">
			<h5><strong>OBSERVACAO:</strong></h5>
			<div class="coment-obs">
				<p>
					<?php
						if(!$comentario == 0){

							while($linha = $resultado->fetch_array()){

								$observacao = $linha['descricao'];
								$operador = $linha['responsavel'];
								$hora = $linha['data'];

								echo "<strong>".$operador." - ".date('d/m/Y H:i',strtotime($hora))."</strong><br>".$observacao."<br><br>";

							}
						}else{
							echo "Nenhum Comentário Postado";
						}
					?>
				</p>
			</div>
		</div>

		<!--  Enviar comentário-->
		<div>
			<form action="" class="row" method="post">
				<div class="col-xs-12 form-group">
					<p>Adicionar Comentário</p>

					<input type="text" 
						id="id" 
						style="display: none;" 
						class="form-control" 
						value="<?php echo $id ?>" disabled>
					
					<textarea class="input-sm form-control" id="texto_coment" rows="4" required></textarea>
				</div>

				<div class="col-xs-12 form-group">
					<select type="text" class="form-control" id="resp-tecnico" disabled>
						<option value="<?php echo $_SESSION['nome_usuario']?>">
							<?php echo $_SESSION['nome_usuario']?>
						</option>
					</select>
				</div>

				<div class="col-xs-12 form-group">
					<input type="button" 
						onclick="salvarComentario(<?php echo $id ?>)" 
						class="btn btn-sm btn-success form-control" 
						value="SALVAR" 
						id="salvar">
				</div>

				<div class="col-xs-12 form-group">
					<a target="_blank" 
						href="imprime.php?codigo=<?php echo $id ?>" 
						type="button" 
						name="imprimir" 
						id="imprimir" 
						class="btn btn-sm btn-primary form-control" 
						value="Imprimir">
						Salvar PDF
					</a>
				</div>
			</form>
		</div>
	</div>

	<script src="js/funcoes.js"></script>

</body>
</html>
