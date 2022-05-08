<?php
include "conexao.php";

class Auth{

    public function verificar(){
        session_start();
        if($_SESSION['autenticado'] == true){
        }else{
            echo "<script>alert('Favor entrar com o usuário e senha do usuário.');</script>";
            echo "<script>window.location = 'index.php';</script>";
        }
    }

    public function Aviso($texto,$caminho){
        echo "<script>alert('{$texto}');</script>";
        echo "<script>window.location = '{$caminho}';</script>";
    }


}

class Log{
    
    private $usuario;
    private $data_registro;
    private $arquivo;
    private $status;
    private $linha;
    private $obs;
    private $insert;

function __construct($usuario,$data_registro, $arquivo)
{
    $this->usuario = $usuario;
    $this->data_registro = $data_registro;
    $this->arquivo = $arquivo;
    
}
    
    public function log($status,$linha,$obs, $texto, $caminho){  
    
    $this->status = $status;
    $this->linha = $linha;
    $this->obs = $obs;

    //Conexao com o banco de dados 
    $user = "luiza_db"; 
    $password = "mcFin@Ad1min15"; 
    $database = "luiza_hml"; 
    $hostname = "luiza-hml.mysql.uhserver.com";


    $connection = mysqli_connect($hostname, $user, $password, $database);
    
    $this->insert = "insert into log (usuario, data_registro,arquivo,status, linha, obs) values ({$this->usuario},'{$this->data_registro}','{$this->arquivo}','{$status}',{$linha},'{$obs}');";
    $insertLog = mysqli_query($connection,$this->insert);
    $selectId = mysqli_query($connection, "select id from log where usuario = {$this->usuario} and status = 'Erro' order by data_registro desc limit 1;");
    $resultLogId = mysqli_fetch_array($selectId);
    //echo $this->insert;
    echo "<script>alert('({$resultLogId['id']}) - {$texto}}.');</script>";
    echo "<script>window.location = '{$caminho}';</script>";
    
}

    public function registro_log(){
    return  $this->insert;
    }

    public function Aviso($texto,$caminho){
        echo "<script>alert('{$texto}');</script>";
        echo "<script>window.location = '{$caminho}';</script>";
    }
}








?>