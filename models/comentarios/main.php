
<?php
	include("./../../conexao/conexao.php");
	
	$identificador = $_POST['identificador'];
	$comentario = $_POST['comentario_post'];
	$operador = $_POST['rt'];
	$data = date('Y-m-d H:i:s');

	$cadastra = $con->query("INSERT INTO historico (id, id_proj, responsavel, descricao, data ) VALUES ('$identificador','','$operador','$comentario','$data') ");
	
	if($cadastra){ ?>
		
	<?php }else{
		echo "Comentario nao enviado!";
	}

?>