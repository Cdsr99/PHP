<?php

class Produto{

    private $codigo;
    private $nome;
    private $descricao;
    private $quantidade;
    private $valor;
    

    public function __construct($codigo,$nome, $descricao, $quantidade, $valor)
    {
        $this->codigo = $nome;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;
        $this->valor = $valor;
        
    }


    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($codigo){
        return $this->codigo;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        return $this->nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        return $this->descricao;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }
    public function setQuantidade($quantidade){
        return $this->quantidade;
    }
    
    public function getValor(){
        return $this->valor;
    }
    public function setValor($valor){
        return $this->valor;
    }


}

?>