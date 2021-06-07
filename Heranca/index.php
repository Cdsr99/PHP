<?php


require_once "classes.php";
require_once "Funcionario.php";

 $fun = new Funcionario();

 $pe = new Pessoa();


$fun->aniver();
$fun->aniver();
$fun->aniver();



$fun->setIdade(15);

$fun->aniver();
$fun->aniver();
$fun->aniver();
$fun->aniver();
$fun->aniver();


$fun->getIdade2();

$fun->setSalario("1200");




?>