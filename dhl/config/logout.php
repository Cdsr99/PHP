<?php
include "conexao.php";
session_start();
$matricula = $_SESSION['login']; 
$nome = $_SESSION['nome'] ;
date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i:s',time());
$acao = "Deslogou";

$insert = mysqli_query($connection,"insert into hsv_sus_logs (data,nome, matricula,acao,obs) values ('{$data}','{$nome}','{$matricula}','{$acao}','{$obs}');");//or die ("erro");
$_SESSION['autenticado'] = false;
session_destroy();
header("Location: ../index.php");
session_destroy();
?>