<?php
class lutador{
    //Atributos
    private $nome;
    private $nascionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;


    function __construct($nome,$nascionalidade,$idade,$altura,$peso,$vitorias,$derrotas,$empates){
        $this->nome = $nome;
        $this->nascionalidade = $nascionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
        

    }

    //Getters e Setters

    public function getNome(){
        return $this->nome;
    }

    public function getNascionalidade(){
        return $this->nascionalidade;
    }

    public function getIdade(){
        return $this->idade;
    
    }
    
    public function getAltura(){
        return $this->altura;
    
    }

    public function getPeso(){
        return $this->peso;
    
    }

    public function getVitorias(){
        return $this->vitorias;
    
    }

    public function getDerrotas(){
        return $this->derrotas;
    
    }

    //Métodos
    public function apresentar(){
        echo "<p>-----------------------------------</p>";
        echo "Chegou a hora o lutador ".$this->getNome();
        echo "<br>Nascionalidade: ".$this->getNascionalidade();
        echo "<br>Idade: ".$this->getIdade();
        echo "<br>Altura: ".$this->getAltura();
        echo "<br>Peso: ".$this->getPeso();
        echo "<br>Vitorias: ".$this->getVitorias();
        echo "<br>Derrotas: ".$this->getDerrotas();
    }

    public function  status(){
        
    }

    public function  ganharLuta(){
        
    }

    public function  perderLuta(){
        
    }

    public function  empatarLuta(){
        
    }

    0
    4
    0
    3
}


?>