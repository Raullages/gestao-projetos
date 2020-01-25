<?php 
	include "conexao/conexao.php";

	$msg = false;
	
	if(isset($_FILES['arquivo'])){
		$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
		$novo_nome = md5(time()) .$extensao;
		$diretorio = "arquivos/";
		move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
		$sql_code = "insert into arquivo_php(id, nome, data) values (null, '$novo_nome', NOW())";
		if(mysqli_query($conexao,$sql_code)){
			$msg = "Arquivo Salvo com sucesso!";
		}else{
			$msg = "Falha ao salvar arquivo";
		}
		
	}
?>
<?php if($msg != false) echo"<p>$msg</p>" ?>
<form action="upload.php" method="POST" enctype="multipart/form-data">								
		ARQUIVO: <input type="file" name="arquivo" >
		<input type="submit" class="btn btn-info" value="Salvar">
</form>
