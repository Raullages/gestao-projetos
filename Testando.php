<?php


	include("conexao/conexao.php");

	$codigo = $_POST['teste'];

$resultado = $conexao->query("SELECT * FROM historico h INNER JOIN projeto p ON h.id = p.id WHERE h.id = $codigo");
	while($linha = $resultado->fetch_array()){
		$id = $linha['id'];
		$nome = $linha['nome_proj'];
		$rt = $linha['operador'];
	//	$observacao = $linha['observacao'];
		$observacao2 = $linha['descricao'];
		$data = $linha['data'];
		?>

		<span>ID: <?php echo $id ?></span><br>
		<span>Nome: <?php echo $nome ?></span><br>
		<span>Responsavel Técnico: <?php echo $rt ?></span><br>
		<!-- <span>Observacao:<br> <?php echo $observacao ?></span><br> -->
		<span>Observacao:<br> <?php echo $observacao2 ?></span><br>
		<span>data:<br> <?php echo date('d-m-Y H:i',strtotime($data))?></span>




	<?php  }

	//
	// $inserir_comentario = $conexao->query("INSERT INTO historico (id, id_proj, responsavel, observacao, data ) VALUES ('$codigo') ")



	/*$cadastrar_obs = $conexao->query("INSERT INTO historico (id_proj, responsavel, observacao, data)
		VALUES ('$id', $operador','$observacao', '$data')");

	*/

	// $resultado = $conexao->query("SELECT * FROM projeto p inner JOIN historico r on p.id = r.id WHERE p.id = $codigo");
	//
	// 	while($linha = $resultado->fetch_array()){
	// 		$nome_proj = $linha['nome_proj'];
	// 		$observacao = $linha['observacao'];
	// 		$data = $linha['hora'];
	// 		$data1 = $linha['data'];
	//
	// 		echo "<br>".$nome_proj."<br>";
	// 		echo $observacao."<br>";
	// 		echo $data."<br>";
	// 		echo $data1."<br>";
	// 	}




/*


	$resultado1 = $conexao->query("
		SELECT * FROM projeto");
	$row = mysqli_num_rows($resultado1);

	if($row > 0){
		while($row = mysqli_fetch_array($resultado1)){
			$nome_proj = $row['nome_proj'];

		}


	}

	echo "------------------------------------------------------<br>";
		echo $nome_proj."<br>OBSERVACAO: ".$observacao."<br>";
		echo "OPERADOR: <br>".$operador." <br>".date('d-m-Y H:i',strtotime($data));

*/




?>
