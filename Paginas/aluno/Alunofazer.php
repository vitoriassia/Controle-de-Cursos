<?php
     require_once 'ControllerAluno.php';

  // Recebimento das variaveis 
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST["IdAluno"]))
  {
	 $IdAluno=$_POST["IdAluno"];
  }


 echo $_POST['Senha'];
  $acao=$_POST['acao'];
  $aluno = new Aluno();
  }
  // Realizar as ações da tabela aluno 

  switch ($acao) {

   /* case "Alterar":
         
         $aluno ->alter_aluno($_POST);
         break;
     */
    case "Excluir":
        
         $aluno ->delete_aluno($IdAluno);
         break;

    case "Incluir":
          $aluno->ra = $_POST['Ra'];
          $aluno->nome = $_POST['Nome'];
          $aluno->curso = $_POST['CursoFaculdade'];
          $aluno->email = $_POST['Email'];
          $aluno->id = $_POST['IdAluno'];
          $aluno->senha = $_POST['Senha'];
          $aluno ->add_aluno();
         break;

    case "Cancelar":
         header("Location: aluno.php");
         break;
  }

?>