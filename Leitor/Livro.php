<?php

require_once "Pessoa.php";
require_once "Publicacao.php";

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    

    //Construtor

    function __construct($titulo, $autor, $totPaginas, $leitor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
    }

    //Getters

    public function getTitulo(){
        return $this->titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function getTotPaginas(){
        return $this->totPaginas;
    }
    
    public function getPagAtual(){
        return $this->pagAtual;
    }

    
    public function getAberto(){
        return $this->aberto;
    }

    
    public function getLeitor(){
        return $this->leitor;
    }

    
    //Setters

       
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    } 

    public function setAutor($autor){
        $this->autor = $autor;
    } 

    public function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas;
    }
    
    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($aberto){
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor){
        $this->leitor = $leitor;
    }



    //Outros
    public function abrir(){
        $this->aberto = true;
    }

    public function avancarPag(){
        if($this->getPagAtual() >= $this->totPaginas){
            echo "Você chegou ao fim e não pode avançar";
        }else{
            $this->pagAtual ++;
        }
        
         
    }

    public function fechar(){
        $this->aberto = false;
    }

    public function folhear($p){
        if($p > $this->totPaginas){
            $this->pagAtual = 0;
        }else{
            $this->pagAtual = $p;
        }
    }

    public function voltarPag(){
        $this->pagAtual --; 
    }

    public function detalhar(){
        echo "<br>";
        echo "<br>";
        echo "Livro: ".$this->titulo;
        echo "<br>";
        echo "Autor: ".$this->autor;
        echo "<br>";
        echo "Paginas: ".$this->pagAtual."/".$this->totPaginas;
        echo "<br>";
        echo "Leitor: ".$this->leitor->getNome();
        echo "<br>";
        echo "<br>";

    }


}




?>