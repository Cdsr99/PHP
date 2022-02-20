<?php

class Cliente{
    private $documento;
    private $nome;

    public function __construct($nome, $documento)
    {
        $this->nome = $nome;
        $this->documento = $documento;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDocumento(){
        return $this->documento;
    }

    public function setDocumento($documento){
        $this->documento = $documento;
    }


}

?>