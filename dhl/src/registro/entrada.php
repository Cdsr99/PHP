<?php 
include "../../config/conexao.php";
include "../../config/classes.php";
session_start();
$verify = new Auth();
$verify->verificar();

date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i:s',time()); // Data da compra

$origem = $_POST['origem'];
$transportadora = $_POST['transportadora'];
$motorista = $_POST['motorista'];
$placa = $_POST['placa'];
$doca = $_POST['doca'];
$lacre = $_POST['lacre'];

$insert = mysqli_query($connection,"insert into controle_in_out (entrada, origem, transportadora, motorista, placa, doca, lacre, usuario) values ('{$data}','{$origem}','{$transportadora}','{$motorista}','{$placa}','{$doca}','{$lacre}', '{$_SESSION['nome']}');")or die ('Erro ao registrar a informações, favor entrar em contato com o administrador');

echo "<script>alert('Entrada registrada com sucesso!');</script>";
echo "<script>window.location = '../../home.php';</script>";














?>