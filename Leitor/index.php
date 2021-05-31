<?php
require_once "Pessoa.php";
require_once "Livro.php";

$p1 = new Pessoa("Caio da Silveira",21,"Masculino");
$p2 = new Pessoa("Raley O'donell Rodrigues",20,"Feminino");

$l1 = new Livro("A morte da bezerra", "Pedro Alvares de Assim", 2, $p1 );
$l2 = new Livro("Estufa de ouro preto sem valor", "Dranquedos Neves", 2, $p1 );


echo "<pre>";
print_r($l1);
echo "</pre>";

echo "<br>";
echo "<br>";

$l1->detalhar();
$l1->avancarPag();

$l1->detalhar();
$l1->avancarPag();

$l1->detalhar();
$l1->avancarPag();

$l1->detalhar();
$l1->avancarPag();

$l1->detalhar();
$l1->avancarPag();

?>