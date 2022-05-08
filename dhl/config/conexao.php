<?php

//Conexao com o banco de dados 
$user = "dhl_transporte"; 
$password = "sp1EhFkokjLBRPY@"; 
$database = "db_dhl"; 
$hostname = "db-dhl.mysql.uhserver.com";



// mcFin@Ad1min15
//phpinfo();

//$yoo = new conexaoerro();

$connection = mysqli_connect($hostname, $user, $password, $database)or die('Erro ao conectar com o banco de dados');




?>