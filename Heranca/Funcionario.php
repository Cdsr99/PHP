<?php
require_once "classes.php";
require_once "Funcionario.php";

class Funcionario extends Pessoa{
    private $salario;
    private $cargo;

public function setSalario($salario){
$this->salario = $salario;

}

    

}

?>