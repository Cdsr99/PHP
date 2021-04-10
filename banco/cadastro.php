<?php
include "classe.php";


$nome = $_POST['nome'];
$email = $_POST['email'];
$tipoConta = $_POST['tipoConta'];


$user1 = new banco();

$user1->abrirConta($nome, $email, $tipoConta);

?>






