<?php
require_once "avaliacaoController.php";

//Incluindo a conexão com banco de dados
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // aqui é onde vai decorrer a chamada se houver um *request* POST
    session_start();
    $avaliar = new avaliacaoController();

    $avaliar->nota=$_POST["Avaliacao"];
    $avaliar->idAluno=$_POST["IdAluno"];
    $avaliar->idCurso=$_POST["IdCurso"];
    $avaliar->addAvaliacao();
}
