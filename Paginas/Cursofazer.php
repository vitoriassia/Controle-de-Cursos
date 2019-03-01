<?php
require_once 'ControllerCurso.php';
  //Incluindo a conexão com banco de dados   
  if($_SERVER['REQUEST_METHOD'] == 'POST') { // aqui é onde vai decorrer a chamada se houver um *request* POST
    session_start();  
    if (isset($_POST["IDcurso"]))
  {
	 $IDcurso=$_POST["IDcurso"];
  }
    $newcurso = new Curso($_POST,$_SESSION['Nome'],$IDcurso);
    $nome= $newcurso -> getNome();
    $IDprofessor= $newcurso -> getIDprofessor();
    $qtdaula= $newcurso -> getQTDaula();
    $idcurso  = $newcurso -> getIDcurso();
    $acao = $newcurso -> getAcao(); 
    

}
  // Realizar as ações da tabela curso 
 
  switch ($acao) {

    case "Alterar":
          
         $newcurso ->alter($nome , $IDcurso, $qtdaula);
         break;

    case "Excluir":
          $newcurso ->delete($IDcurso);
          break;
    case "adicionar":
          $newcurso ->add($nome , $IDprofessor, $qtdaula);
         break;

    case "Cancelar":
         header("Location: Curso.php");
         break;
  }

?>