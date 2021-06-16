<?php

require_once "Visitante.php";

abstract class Pessoa{
    protected $nome;
    private $idade;
    private $sexo;

    public final function fazerAniver(){
        $this->idade = getIdade() + 1;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getSexo(){
        return $this->sexo;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setIdade($nome){
        $this->idade = $nome;
    }

    public function setSexo($nome){
        $this->sexo = $nome;
    }


    
}


?>