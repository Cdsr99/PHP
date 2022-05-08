<?php 
include "../../config/conexao.php";
include "../../config/classes.php";
session_start();
$verify = new Auth();
$verify->verificar();

date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i:s',time()); // Data da compra

$placa = $_POST['placa'];
$status = $_POST['status'];


$select = mysqli_query($connection, "select * from motorista where placa = '{$placa}';");

$linha2 = mysqli_fetch_array($select);


if($status == 'Entrada'){


$template = file_get_contents('../../resource/registro/entrada.html');
$linhasTabela = '';

$tr = str_replace('#TRANSPORTADORA', $linha2['transportadora'], $template);
$tr = str_replace('#MOTORISTA', $linha2['nome'], $tr);
$tr = str_replace('#PLACA', $placa, $tr);
$tr = str_replace('#LACRE', $linha2['lacre'], $tr);
$linhasTabela .= $tr;


//$linhasTabela .=  str_replace('#EMAILFAT', "<form action='../fatura/PDF/PDF.php' method='POST'> <input type='hidden' name='id' value ='{$id}'> <input type='submit'class='btn btn-dark btn-filtrar' value='Gerar PDF'> </form>", $button);

echo $linhasTabela;



}else{
$data2 = date('Y-m-d',time()); // Data da compra

//UPDATE `db_dhl`.`controle_in_out` SET `saida` = '', `usuario` = 'Admin' WHERE (`id` = '1');
$update = mysqli_query($connection,"update controle_in_out set saida = '{$data}' where placa = '{$placa}' and cast(entrada as date) = '{$data2}';")or die("Erro ao registrar a saida");
echo "<script>alert('Saída registrada com sucesso!');</script>";
echo "<script>window.location = '../../home.php';</script>";

}












?>