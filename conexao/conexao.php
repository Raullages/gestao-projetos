<?php

$usuario = 'root';
$senha = '';
$banco = 'incentiva';
    
$con = mysqli_connect('127.0.0.1','root', '', 'incentiva');

$selecao = mysqli_select_db($con, $banco);


if(!$con){
	echo "
		<script>
			alert('Erro ao conectar com a base');
			
		</script>
	";
}

?>
