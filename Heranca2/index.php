<?php

require_once "Pessoa.php";

$v1 = new Visitante();
$v1->setIdade(2);
$v1->getIdade();
echo "<pre>";
print_r($v1);
echo "</pre>"
?>