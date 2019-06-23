<?php

//Incluindo a conexão com banco de dados
if($_SERVER['REQUEST_METHOD'] == 'POST') { // aqui é onde vai decorrer a chamada se houver um *request* POST
    session_start();
    $dados = $_POST["IdAluno"];
    echo $dados;
}
