<?php

class Emissor{
    private $cnpj;
    private $nome;

    public function __construct($nome, $cnpj)
    {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCnpj(){
        return $this->cnpj;
    }

    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }


}

?>