<?php

class banco{
    private $nome;
    private $email;
    private $tipoConta;
    private $saldo;


    public function abrirConta($nome, $email, $tipoConta){
        $this->nome = $nome;
        $this->email = $email;
        $this->tipoConta = $tipoConta;
        $this->saldo = 0;

        echo "<script> alert('Conta daberta com sucesso');</script>";
        echo "<script> windown.location = 'home.php';</script>";
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function depositar($saldo){
        $this->saldo = getSaldo() + $saldo;
        echo "<script> alert('Deposito de R$ $saldo, realizado com sucesso na conta de $this->nome');</script>";
    }

    public function sacar($valor){
        $this->saldo = getSaldo() - $valor;
        echo "<script> alert('Saque de R$ $valor, realizado com sucesso na conta de $this->nome');</script>";
    }

}