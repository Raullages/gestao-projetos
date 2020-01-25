<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro RT</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <script src="../js/ajaxquery.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
 
    <style>
    body{
       margin: 0;
        background-color: #aadddd;
    }
    h3{
       text-align: center;
        margin-top: -10px;
       border-radius: 5px;
        margin-bottom: 20px;
        padding: 5px;
        width: 100%;
        background-color: #397ab7;
        color: #fff;
        box-shadow: 0px 1px 2px black;
    }
    .box{
        background-color: #fff;
        position: absolute;
        box-shadow: 0px 3px 13px black;
        padding: 50px;
        width: 400px;
        height: auto;
        color: black;
        top: 50%;
        margin-top: -200px;
        left: 50%;
        margin-left: -200px;    
        
        
    }

    .box h4{
        color: black;
        text-align: center;
        
    }
    .box #enviar{
        width: 300px;
        position: absolute;
        text-decoration: none;
        text-align: left;
       
        color: #fff;
    }
    .box #cancelar{
        width: 300px;
        /*position: absolute;*/
        margin-top: 30px;
       margin-bottom: 20px;
        text-decoration: none;
        text-align: left;
    }
    .box #enviar:hover{
        /*background-color:  #397988;*/
    }

    </style>
<script>

    function info(){
        if(form.nome.value == ""){
            alert("Informe um nome");
            form.nome.focus();
            return false;
            
        }else  if(form.email.value == ""){
            alert("Informe um email");
            form.email.focus();
            return false;
            
        }else if(form.senha.value == ""){
            alert("Informe um senha");
            form.senha.focus();
            return false;
            
        }{
            form.submit("cadastro-rt.php");
        }
    }
    function focar(){
        form.nome.focus();
    }
</script>
</head>
<body onload="focar()">

    <div class="container">
       
        <div class="row">
            <div class="box">
             <h3>Cadastro de RT</h3>
                <form action="cadastro-rt.php" name="form" method="POST">

                    <p>Nome: </p>
                    <input type="text" class="form-control"  name="nome">
                    
                    <p>Email: </p>
                    <input type="text" class="form-control" name="email">

                    <p>Senha: </p>
                    <input type="password" class="form-control" name="senha">
                    <br>
                    <a href="javascript:;" onclick="info();" class="btn btn-primary" id="enviar">Enviar</a><br>
                    <a href="javascript:;" value="Voltar" class="btn btn-danger" onclick="location.href = '../index.php'" id="cancelar">Voltar</a>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
