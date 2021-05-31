<?php

class Pessoa{
private $nome;
private $idade;
private $sexo;

function __construct($nome,$idade,$sexo){
    $this->nome = $nome;
    $this->idade = $idade;
    $this->sexo = $sexo;
}

public function fazeraniver(){
  $this->idade = $this->idade + 1;
}

public function ShowIdade()
{

    echo $this->idade;
    return $this->idade;
}

// GETTERS 

public function getNome(){
    return $this->nome;
}

public function getIdade(){
    return $this->idade;
}

public function getSexo(){
    return $this->sexo;
}

// SETTERS  

public function setNome($nome){
    return $this->nome = $nome;
}

public function setIdade($idade){
    return $this->nome = $idade;
}

public function setSexo($sexo){
    return $this->nome = $sexo;
}









}



?>