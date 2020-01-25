<?php 
include("conexao/conexao.php");
require_once('dompdf/dompdf/dompdf_config.inc.php');
$dompdf = new DOMPDF();
 
	if (isset($_GET['codigo'])) {
		$codigo = $_GET['codigo'];
	}else{
		echo 'nao existe';
	}
	

	

		$result = $conexao->query("SELECT * FROM projeto p INNER JOIN historico h ON p.id = h.id where p.id = '$codigo'");
        $linha = sqlsrv_num_rows($result);
        
        if ($linha > 0){
                while($linha = sqlsrv_fetch_array($result)){
						$id = $linha['id'];
                        $nome = $linha['nome_proj'];
                        $responsavel = $linha['nome_resp'];
                        $telefone = $linha['telefone'];
                        $lote = $linha['lote'];
                        $quadra = $linha['quadra'];
						$logradouro = $linha['logradouro'];
                        $bairro = $linha['bairro'];
						$tipo = $linha['tipo'];
                        $dt_inicio = $linha['data_inicio'];
                        $dt_termino = $linha['data_fim'];
                        $status = $linha['info_status'];
                        $protocolo = $linha['protocolo'];
                        $observacao = $linha['descricao'];


                    }
                     $var = nl2br($observacao);
                     $data_inicio = Date('d/m/Y',strtotime($dt_inicio));
                     $data_termino = Date('d/m/Y',strtotime($dt_termino));
                   }

$dompdf->load_html("
<html>

<style>
	body{
		margin:10px;
		padding:5px;
	}
	h3{
		padding-bottom: 50px;

	}	
	#data{
	margin-right:50px;
}
.rodape{
	bottom:50px;
}
.imagem img{
	top:50%;
	margin-top:-100px;
	position:absolute;
	opacity:0.2;
	left:50%;
	margin-left:-200px;
	width: 400px;
	height:auto;
}
.imagem1 img{
	position:absolute;
	width:150px;
	height:auto;
}
</style>

<body>
<div class='container'>
<div class='imagem1'>
	<img src='img/Logo.png' alt='Incentiva Construtora Ltda'>
</div>
<div class='imagem'>
	<img src='img/Logo.png' alt='Incentiva Construtora Ltda'>
</div>
<h3 style='text-align: center;'>Relatório Projeto $nome</h3>

Nome: $nome <br>
Responsavel: $responsavel <br>
Telefone: $telefone <br>
Lote: $lote <br>
Quadra: $quadra <br>
Logradouro: $logradouro <br>
Bairro: $bairro <br>
Data Inicio: $data_inicio <br>
Data Término:  $data_termino <br>
Status: $status <br> 
Protocolo: $protocolo <br><br>
<h4>Observacao:</h4> $var
<br><br><br>
<br><br><br>

<div id='data'>
	<p style='text-align:right;'>Belo Horizonte,_____ de _____________________ de 2017.</p>
</div>

<br><br><br>
<br><br><br>

	<div class='container rodape'>
		<p style='text-align:center;'>___________________________________________________________________</p>
							<p style='text-align:center; font:calibri;'>Incentiva Construtora Ltda <br>
							CNPJ: 23.042.937/0001-25</p>
	</div>
</div>
</body>
</html>");
$dompdf->render();
$dompdf->stream("Relatório Projeto $nome.pdf",
array('attachment', false)
	);

?>