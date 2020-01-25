<?php	
include("./conexao/conexao.php");
		
        $result = $conexao->query("SELECT * FROM projeto");
        
                while($linha = $result->fetch_array()){
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
		
        }




?>