<?php

require_once 'ControllerProfessor.php';
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST["RA"]))
  {
	 $IdProfessor=$_POST["IdProfessor"];
  }
 
  $professor = new Professor();
  $acao = $_POST["acao"];
  
 
  // Realizar as ações da tabela Professor 
}
  switch ($acao) {

    case "Alterar":
     
          $professor->alter_professor($_POST);
         break;

    case "Excluir":
          $professor->delete_professor($IdProfessor);
         break;

    case "Incluir":
          $professor ->add_professor($_POST);
         break;

    case "Cancelar":
         header("Location: professor.php");
         break;
  }

?>