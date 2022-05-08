<?php

//Conexao com o banco de dados 
$user = "KeePass"; 
$password = "KeePass"; 
$database = "KeePass"; 
$hostname = "KeePass";

//phpinfo();

//$yoo = new conexaoerro();

$connection = mysqli_connect($hostname, $user, $password, $database)or die('Erro ao conectar com o banco de dados');




?>
