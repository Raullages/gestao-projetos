<!DOCTYPE html>
<html lang="en">
<style>
    .menu{
        margin: 0;
        padding: 0px;
        display: flex
    }
    .menu li {
        list-style: none;
        
    }
    .menu li a {
        text-decoration: none;
        margin: 5px 5px;
    }
</style>
<body>

    <div class="row" style="background-color: #FFF;">
        <div class="col-xs-2" style="padding-top: 5px">
            <a href="?sair">
                <span class="glyphicon glyphicon-log-out" aria-hidden="true" title="Sair"></span>
                <?php echo $_SESSION['nome_usuario'] ?>
            </a> 
        </div>
        <div class="col-xs-10" style="display: flex; 
                                    justify-content: space-between;
                                    padding: 5px 0px;">
            <a href="./main.php">
                <h4 style="padding: 0; margin: 0">Sistema de Controle Projetos</h4> 
            </a>
            <div class="navbar-header">
                <button type="button" 
                        class="navbar-toggle collapsed" 
                        data-toggle="collapse" 
                        data-target="#navbar1">

                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="menu pull-right">
                    <li class="active"><a href="#">HOME</a></li>
                    <li><a href="#prefeitura">PREFEITURA</a></li>
                    <li><a href="#servicos">SERVIÇOS</a></li>
                    <li><a href="#">CONTATO</a></li>
                </ul>
            </div>
        </div>
    </div>
    
</body>
</html>