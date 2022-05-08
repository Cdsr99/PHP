<?php 
include "../../config/conexao.php";
include "../../config/classes.php";
session_start();
$verify = new Auth();
$verify->verificar();


date_default_timezone_set("America/Sao_Paulo");
$data = date('Y-m-d H:i:s',time()); // Data da compra

$nome = $_POST['nome'];
$transportadora = $_POST['transportadora'];
$placa = $_POST['placa'];
$lacre = $_POST['lacre'];

$select = mysqli_query($connection, "select placa from motorista where placa = '{$placa}';");
$readSelect = mysqli_fetch_array($select);

if($readSelect['placa'] == $placa){
echo "<script>alert('Motorista já cadastrado no sistema!');</script>";
echo "<script>window.location = 'index.php';</script>";
}else{
$insert = mysqli_query($connection,"insert into motorista (createdAt, nome, transportadora, placa,lacre, usuario) values ('{$data}','{$nome}','{$transportadora}','{$placa}','{$lacre}', '{$_SESSION['nome']}');")or die ('Erro ao registrar a informações, favor entrar em contato com o administrador');

echo "<script>alert('Motorista cadastrado com sucesso!');</script>";
echo "<script>window.location = 'index.php';</script>";
}







?>