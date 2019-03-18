<?php

require_once 'ControllerProfessor.php';
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST["RA"]))
  {
	 $RA=$_POST["RA"];
  }
 
  $professor = new Professor();
  $acao = $_POST["acao"];
  
 
  // Realizar as ações da tabela Professor 
}
  switch ($acao) {

    case "Alterar":
     
          $professor->alter_professor($_POST,$RA);
         break;

    case "Excluir":
          $professor->delete_professor($RA);
         break;

    case "Incluir":
          $professor ->add_professor($_POST,$RA);
         break;

    case "Cancelar":
         header("Location: professor.php");
         break;
  }

?>