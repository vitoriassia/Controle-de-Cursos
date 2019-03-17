<?php
require_once 'ControllerCurso.php';
require_once 'consultaBanco.php';
  //Incluindo a conexão com banco de dados   
  if($_SERVER['REQUEST_METHOD'] == 'POST') { // aqui é onde vai decorrer a chamada se houver um *request* POST
    session_start();  
    if (isset($_POST["IDcurso"]))
  {
	 $IDcurso= $_POST["IDcurso"];  }
  
    $acao = $_POST["acao"];

    $nameimg = 'None'; 
            
    $Banco = get_curso($IDcurso);
    
    $newcurso = new Curso;
  // Realizar as ações da tabela curso 
  switch ($acao) {

    case "Alterar":
          $newcurso->alter_curso($_POST,$_SESSION['Nome'],$IDcurso);
            break;

    case "Excluir":
          $newcurso -> delete_curso($IDcurso);
            break;
    case "adicionar":
          $newcurso->add_curso($_POST,$_SESSION['Nome'],$IDcurso);
            break;

    case "Cancelar":
         header("Location: Curso.php");
         break;
  
  }
}
?>