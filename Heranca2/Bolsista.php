<?php


class Bolsista extends Aluno
{
    public function PagarMensalidade(){
        echo "Mensalidade de ".$this->nome." foi paga com um valor diferenciado, porque o mesmo é bolsista!";
    }

}