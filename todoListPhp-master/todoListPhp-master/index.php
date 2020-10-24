<?php
// index sera o ponto central

require "src/classes/Tarefa.php";
require "src/classes/ArquivoTarefa.php";

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];
$status = 0;


 $tarefa = new Tarefa($status,$nome ,$descricao,$data);

 $listaTarefas = [];
 $listaTarefas[] = $tarefa;
 //$listaTarefas[] = $tarefa2;

$arquivoTarefa = new ArquivoTarefa("tarefasteste.json");
$arquivoTarefa->salva($listaTarefas);

print_r($arquivoTarefa->le());