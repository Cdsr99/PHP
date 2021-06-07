<?php

class Pessoa{
    private $nome;
    private $idade;
    private $cpf;
    private $cidade;

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }


    public function aniver(){
        $this->idade = $this->getIdade() + 1;
    }

    public function getIdade2(){
        echo $this->idade;
    }

}






?>