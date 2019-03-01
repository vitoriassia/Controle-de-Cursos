<?php

require_once 'ControllerProfessor.php';
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST["RA"]))
  {
	 $RA=$_POST["RA"];
  }
 
  $newprofessor = new Professor($_POST,$RA);
  $nome= $newprofessor -> getNome();
  $Email= $newprofessor-> getEmail();
  $RA= $newprofessor -> getRA();
  $acao = $newprofessor-> getAcao(); 
  // Realizar as ações da tabela Professor 
}
  switch ($acao) {

    case "Alterar":
     
          $newprofessor->alter($nome , $RA, $Email);
         break;

    case "Excluir":
          $newprofessor->delete($RA);
         break;

    case "Incluir":
          $newprofessor -> add($nome , $RA, $Email);
         break;

    case "Cancelar":
         header("Location: professor.php");
         break;
  }

?>