<?php

include 'Produto.php';

class NotaFiscal{

    private $numero;
    private $dataEmissao;
    private $chave;
    private $emissor;
    private $cliente;
    private $produto;

    public function __construct($numero,$dataEmissao, $chave, $emissor, $cliente, $produto)
    {
        $this->numero = $numero;
        $this->dataEmissao = $dataEmissao;
        $this->chave = $chave;
        $this->emissor = $emissor;
        $this->cliente = $cliente;
        $this->produto = $produto;
    }


    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){
        return $this->numero;
    }

    public function getdataEmissao(){
        return $this->dataEmissao;
    }
    public function setdataEmissao($dataEmissao){
        return $this->dataEmissao;
    }

    public function getChave(){
        return $this->chave;
    }
    public function setChave($chave){
        return $this->chave;
    }

    public function getEmissor(){
        return $this->emissor;
    }
    public function setEmissor($emissor){
        return $this->emissor;
    }
    
    public function getCliente(){
        return $this->cliente;
    }
    public function setCliente($cliente){
        return $this->cliente;
    }

    public function getProduto(){
        return $this->produto;
    }
    public function setProduto($produto){
        return $this->produto;
    }

}

?>