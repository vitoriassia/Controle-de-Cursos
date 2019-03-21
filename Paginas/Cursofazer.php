<?php
require_once 'ControllerCurso.php';
require_once 'consultaBanco.php';
  //Incluindo a conexão com banco de dados   
  if($_SERVER['REQUEST_METHOD'] == 'POST') { // aqui é onde vai decorrer a chamada se houver um *request* POST
    session_start();  
    if (isset($_POST["IdCurso"]))
  {
	 $IdCurso= $_POST["IdCurso"];  }
  
    $acao = $_POST["acao"];

    
    $newcurso = new Curso;
  // Realizar as ações da tabela curso 
  switch ($acao) {

    case "Alterar":
          $newcurso->alter_curso($_POST,$_SESSION['Nome']);
            break;

    case "Excluir":
          $newcurso -> delete_curso($IdCurso);
            break;
    case "adicionar":
          $newcurso->add_curso($_POST,$_SESSION['Nome']);
            break;

    case "Cancelar":
         header("Location: Curso.php");
         break;
  
  }
}
?>