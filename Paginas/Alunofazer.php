<?php
     require_once 'ControllerAluno.php';
  // Recebimento das variaveis 
  if (isset($_POST["RA"]))
  {
	 $IdAluno=$_POST["IdAluno"];
  }
 
  $acao=$_POST['acao'];
  $aluno = new Aluno();
 
  // Realizar as ações da tabela aluno 

  switch ($acao) {

    case "Alterar":
         
         $aluno ->alter_aluno($_POST);
         break;

    case "Excluir":
        
         $aluno ->delete_aluno($IdAluno);
         break;

    case "Incluir":
          $aluno ->add_aluno($_POST);
         break;

    case "Cancelar":
         header("Location: aluno.php");
         break;
  }

?>