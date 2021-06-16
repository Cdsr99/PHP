<?php

require_once "Pessoa.php";

class Aluno extends Pessoa{
    private $matricula;
    private $curso;

    public function PagarMensalidade(){
        echo "Mensalidade de ".$this->nome." está paga!";
    }

    public function setMatricula($n){
        $this->matricula = $n;
    }
    public function setCurso($n){
        $this->curso = $n;
    }
    public function getMatricula(){
        return $this->matricula;
    }
    public function getCurso(){
        return $this->curso;
    }

}


?>