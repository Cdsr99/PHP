<?php
include "classes.php";
include 'conexao.php';



$Emaillogin = $_POST['login'];
$password = $_POST['password'];


$select = mysqli_query($connection, "select * from usuario where login = '{$Emaillogin}' and status = 'Ativo';")or die ('Erro ao buscar usuário no banco de dados, favor entrar em contato com o Administrador!');

$linha = mysqli_fetch_array($select);

/*
echo "Login right: ".$linha['login'].'<br><br>'; 
echo "Password right: ".$linha['password'].'<br><br>';
echo "Login inputed: ".$login.'<br><br>';
echo "Login inputed: ".md5($password).'<br><br>';
*/
if($linha['login'] == "" || $linha['login'] == null )
{
    echo "<script>alert('Usuário não encontrado');</script>";
    //$aviso_erro->falha('Usuário não encontrado, favor tentar novamente');
    echo "<script>window.location = '../resource/login/index.html';</script>";
}else {
    if ($Emaillogin == $linha['login'] && md5($password) == $linha['senha']) {
        
        
        session_start();
        $_SESSION['login'] = $linha['login'];
        $_SESSION['nome'] = $linha['nome'];
        $_SESSION['autenticado'] = true;
        //header("Location: home.php");
        /*

    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d H:i:s',time()); // Data da compra
    

    $log = new Log($_SESSION['codigo'],$data,'autenticacao.php','Autenticando');
    $insert = mysqli_query($connection, $log->registro_log());
*/
        echo "<script>window.location = '../home.php';</script>";

    }else{
        echo "<script>alert('Usuário ou senha incorreta');</script>";
       // header("Location: index.html");
        echo "<script>window.location = '../resource/login/index.html';</script>";
    }
}