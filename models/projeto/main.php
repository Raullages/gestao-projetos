<?php

class Conexao {

    public $host;
    public $usuario;
    public $senha;
    public $banco;
    public $con;
    public $selecao;

    public function getInstance(){
        $this->host = '127.0.0.1';
        $this->usuario = 'root';
        $this->senha = '';
        $this->banco = 'incentiva';

        $this->con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->banco);
    
        $this->selecao = mysqli_select_db($this->con, $this->banco);
    
        if(!$this->con){
            echo "
                <script>
                    alert('Erro ao conectar com a base');
                    
                </script>
            ";
        }else{
            return $this->con;
        }
    }   

}

class Projeto {

    public $con;

    public function __construct () {

        $this->con = new Conexao();
    }

    public function getAll () {
        $result = $this->con->getInstance()->query("SELECT * FROM projeto ORDER BY ASC");

        return $result;
    }

    public function getProjeto ($codigo) {
        
        $result = $this->con->getInstance()->query("SELECT * FROM projeto WHERE id = $codigo");

        return $result->fetch_object();

    }

    public function atualizar ($codigo) {
        
        $codigo = $_GET['codigo'];

        $nome = $_POST['nome'];
        $nome_resp = $_POST['responsavel'];
        $telefone = $_POST['telefone'];
        
        $tipo = $_POST['tipo'];
        $dt_inicio = $_POST['dt_inicio'];
        $dt_termino = $_POST['previsao'];
        $status = $_POST['status'];
        $protocolo = $_POST['protocolo'];
        $observacao = $_POST['observacao'];

        

        // $atualizar = mysqli_query($con," UPDATE projeto SET  nome_proj = '$nome', operador = '$nome_resp', telefone = '$telefone', tipo = '$tipo', data_inicio = '$dt_inicio', data_fim = '$dt_termino', info_status = '$status', protocolo = '$protocolo', observacao = '$observacao' WHERE id = '$codigo'" );

        // if($atualizar){
        //     echo "<script>alert('Alterado com Sucesso')</script>";
        //     echo "<script>window.close();</script>";		
        // }else {
        //     echo mysqli_error($con);
	    // }
    }

    public function excluir ($id) {

        $excluir = $this->con->getInstance()->query("DELETE FROM projeto WHERE id = $id");

        var_dump($excluir);
        
        return $excluir;

    } 

}