<?php
    require_once 'Aprendizado.php';
    include_once("conexao/conexao.php");
  //INICIO A SESSÃO
  session_start();
  // Recebimento das variaveis 
  if (isset($_POST["Nome"]))
  {
	 $Nome=$_POST["Nome"];
  }
  $Nomea= $_SESSION['Nome'];
  $acao=$_POST['acao'];
  $IDcurso=$_POST['IDcurso'];
  $presente = $_POST["presente"];


$aprendizado = new Aprendizado();

 // Realizar as ações da tabela aprendizado 

  switch ($acao) {

    case "Presença":

        $aprendizado ->AddPresenca($Email,$IDcurso);
        break;

    case "Excluir":

        $aprendizado ->Excluir($Email);
        break;

    case "Inscrever":

        $aprendizado ->Inscrever($Email,$IDcurso);
        break;

    case "Cancelar":
         header("Location: curso.php");
         break;
  }

?>