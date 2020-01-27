<?php

  include("./../../conexao/conexao.php");

	$codigo = $_GET['codigo'];

	//$id = $_POST['id'];
	$nome = $_POST['nome'];
	$nome_resp = $_POST['responsavel'];
	$telefone = $_POST['telefone'];
	
	$tipo = $_POST['tipo'];
	$dt_inicio = $_POST['dt_inicio'];
	$dt_termino = $_POST['previsao'];
	$status = $_POST['status'];
	$protocolo = $_POST['protocolo'];
	$observacao = $_POST['observacao'];

	$atualizar = mysqli_query($con," UPDATE projeto SET  nome_proj = '$nome', operador = '$nome_resp', telefone = '$telefone', tipo = '$tipo', data_inicio = '$dt_inicio', data_fim = '$dt_termino', info_status = '$status', protocolo = '$protocolo', observacao = '$observacao' WHERE id = '$codigo'" );

	if($atualizar){
		echo "<script>alert('Alterado com Sucesso')</script>";
		echo "<script>window.close();</script>";		
	}else {
		echo mysqli_error($con);
	}
	
?>