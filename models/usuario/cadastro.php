<?php 
	include("../conexao/conexao.php");

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	$select = $con->query("SELECT * FROM usuario");

	$row = mysqli_num_rows($select);
	
	var_dump($nome, $email, $senha);
	
	// if($row){
		$row = $select->fetch_array();

		if(strcmp($nome, $row['nome'])){

			$con->query("INSERT INTO usuario VALUES ('','$nome','$email','$senha')") or die(mysqli_error());
			echo "
				<script>
					alert('Cadastro Realizado com sucesso!');
					location.href= '../index.php';
				</script>
			";
		}else{
			echo "<script>alert('Usuario ja existe');
			location.href= 'cadastrar_rt.php';
			</script>";
		}
	// }

	
	


?>