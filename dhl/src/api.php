<?php
include "../config/conexao.php";
//include "../../config/classes.php";
date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i:s',time()); // Data da compra

$placa = $_GET['placa'];

echo $placa;
echo "<p>select * from motorista where placa = '{$placa}';<br><br>";

$select = mysqli_query($connection, "select * from motorista where placa = '{$placa}';");

$linhaSelect = mysqli_fetch_array($select);

$insert = mysqli_query($connection, "insert into controle_in_out (entrada, transportadora, motorista, placa) values ('{$data}','{$linhaSelect['transportadora']}','{$linhaSelect['nome']}','{$linhaSelect['placa']}');")or die ('Erro ao registrar a informação');

echo "<script>alert('Entrada registrada com sucesso!');</script>";
echo "<script>window.location = '../../home.php';</script>";





?>