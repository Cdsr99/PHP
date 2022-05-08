<?php 
include "../../config/conexao.php";
include "../../config/classes.php";
session_start();
$verify = new Auth();
$verify->verificar();

require '../../resource/cadastro_motorista/index.html';











?>