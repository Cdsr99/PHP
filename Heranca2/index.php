<?php

require_once "Pessoa.php";
require_once "Visitante.php";
require_once "Aluno.php";
require_once "Bolsista.php";


$v1 = new Visitante();
$a1 = new Aluno();
$b1 = new Bolsista();

$v1->setIdade(22);
$v1->setNome("Caio");
$v1->setSexo("M");

$a1->setNome("caio");
$a1->setIdade(22);
$a1->setSexo("M");
$a1->setMatricula(1111);
$a1->setCurso("TI");
$a1->PagarMensalidade();

$b1->setNome("Rodrigues");
$b1->setIdade(21);
$b1->setSexo("M");
echo "<br><br>";
$b1->PagarMensalidade();




echo "<pre>";
print_r($v1);
echo "</pre>";

echo "<br>";

echo "<pre>";
print_r($a1);
echo "</pre>";

echo "<pre>";
print_r($b1);
echo "</pre>";
?>