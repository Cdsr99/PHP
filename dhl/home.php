<?php 
include "config/conexao.php";
include "config/classes.php";
session_start();
$verify = new Auth();
$verify->verificar();

require 'resource/registro/index.html';

date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i:s',time()); // Data da compra

$select = mysqli_query($connection, "select placa from motorista;");

echo "<datalist id = 'placa'>";
while($linha = mysqli_fetch_array($select))
{
    echo "<option>".$linha['placa']."</option>";
}
echo "</datalist>";









?>