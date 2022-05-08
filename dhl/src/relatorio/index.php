<?php 
include "../../config/conexao.php";
include "../../config/classes.php";
session_start();
$verify = new Auth();
$verify->verificar();


date_default_timezone_set("America/Sao_Paulo");
//$data = date('Y-m-d H:i:s',time()); // Data da compra
$data = date('Y-m-d'); // Data da compra

$de = $firstMonthDay;  //pegando primeiro dia do mes e colocando na variavel de seleção
$para = $lastMonthDay;  //pegando ultimo dia do mes e colocando na variavel de seleção
$select = mysqli_query($connection,"select * from controle_in_out where cast(entrada as date) = '{$data}';")or die ("Erro ao trazer os registros do banco de dados, favor informar o adminstrador."); 
$template = file_get_contents('../../resource/relatorio/index.html');

$corpoTable = file_get_contents('../../resource/relatorio/corpo_tabela.html');

// echo "<br><br>Registros: ".$linhas;

$linhasTabela = '';

while($total2 = mysqli_fetch_array($select))
{

    $tr = str_replace('#Entrada', $total2['entrada'], $corpoTable);
    $tr = str_replace('#Origem',  ucwords($total2['origem']), $tr);
    $tr = str_replace('#Transp', ucwords($total2['transportadora']), $tr);
    $tr = str_replace('#Motorista', ucwords($total2['motorista']), $tr);
    $tr = str_replace('#Placa', strtoupper($total2['placa']), $tr);        
    $tr = str_replace('#Doca', ucwords( $total2['doca']), $tr);        
    $tr = str_replace('#Lacre', $total2['lacre'], $tr);        
    $tr = str_replace('#Saida', $total2['saida'], $tr);        
    
    $linhasTabela .= $tr;
}


echo str_replace('#CORPOTABLE', $linhasTabela, $template);











?>