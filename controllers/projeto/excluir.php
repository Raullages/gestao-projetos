<?php 

include('./../../models/projeto/main.php');

$projeto = new Projeto();

$projeto->excluir($_GET['codigo']);


?>