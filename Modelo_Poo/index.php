<?php

require_once 'class/Cliente.php';
require_once 'class/Emissor.php';
require_once 'class/NotaFiscal.php';
require_once 'class/Produto.php';
include 'resource/index.php';

/*
    Variables
*/

//NotaFiscal

$nome = "Caio da Silveira Rodrigues";
$numero = 123;
$dataEmissao = '2022-08-23 14:35:07';
$chave = 321 ;  
$emissor = "Mercado do Paulinho";
$cliente = $nome;
$produto = "Lamburguini Gallardo";

//Emissor
$cnpj = "00.000.000/0001-91";
$nomeEmissor ="Banco do Brasil";

//Cliente
$nomeCliente = $nome;
$documento = "123.456.789-11";

//Produto
$codigo = 234234;
$nomeProduto = $produto;
$descricao = "Yellow legitimate lambo";
$quantidade = 3;
$valor = 100;


/* instances */

$nota = new NotaFiscal($numero,$dataEmissao,$chave,$emissor,$cliente,$produto);
$emissor = new Emissor($nomeEmissor, $cnpj);
$client = new Cliente($nomeCliente,$documento);
$prod = new Produto($codigo,$nomeProduto,$descricao,$quantidade,$valor);


$template = file_get_contents('resource/index.html');



$linhasTabela = '';


    $tr = '';
    $tr = str_replace('#NUMERONF', $nota->getNumero(), $template);
    $tr = str_replace('#DATA',$nota->getdataEmissao(), $tr);
    $tr = str_replace('#EMISSOR',$nota->getEmissor(), $tr);
    $tr = str_replace('#CHAVE',$nota->getChave(), $tr);
    $tr = str_replace('#CLIENTE',$nota->getCliente(), $tr);
    $tr = str_replace('#PRODUTO',$nota->getProduto(), $tr);

    $tr = str_replace('#NOMEEMISSOR',$emissor->getNome(), $tr);
    $tr = str_replace('#CNPFEMISSOR',$emissor->getCnpj(), $tr);

    $tr = str_replace('#NOMECLIENTE',$client->getNome(), $tr);
    $tr = str_replace('#DOCUMENTOCLIENTE',$client->getDocumento(), $tr);

    $tr = str_replace('#CODPRODUTO',$prod->getCodigo(), $tr);
    $tr = str_replace('#NOMEPRODUTO',$prod->getNome(), $tr);
    $tr = str_replace('#DESCRICAO',$prod->getDescricao(), $tr);
    $tr = str_replace('#QUANTIDADE',$prod->getQuantidade(), $tr);
    $tr = str_replace('#VALOR',$prod->getValor(), $tr);




    $linhasTabela .= $tr;

    echo $linhasTabela;



?>