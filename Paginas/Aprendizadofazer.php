<?php
    require_once 'Aprendizado.php';
    include_once("conexao/conexao.php");
  //INICIO A SESSÃO
  session_start();
  // Recebimento das variaveis 
  
  $acao=$_POST['acao'];
 


$aprendizado = new Aprendizado();

 // Realizar as ações da tabela aprendizado 

  switch ($acao) {

    case "Presença":
        $aprendizado->idcurso=$_POST['IdCurso'];
        $aprendizado->idaluno=$_POST['IdAluno'];
        $aprendizado ->AddPresenca();
        break;

    case "Excluir":

        $aprendizado ->Excluir($Email);
        break;

    case "Inscrever":
        $aprendizado->idcurso=$_POST['IdCurso'];
        $aprendizado->idaluno=$_POST['IdAluno'];
        $aprendizado ->Inscrever();
        break;

    case "Cancelar":
         header("Location: curso.php");
         break;
  }

?>