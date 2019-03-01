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
         include("conexao/conexao.php");
         $sql = "UPDATE curso SET Nome='$Nome', QTDaula='$QTDaula' WHERE IDcurso='$IDcurso'";
         $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
         mysqli_close($conexao);
         header("Location: Professor.php");
         break;

    case "Excluir":
         include("conexao/conexao.php");
         $sql = "DELETE FROM curso WHERE IDcurso='$IDcurso'";
         $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
         mysqli_close($conexao);
         header("Location: Curso.php"); 
         break;

    case "adicionar":
          $newcurso ->add($nome , $IDprofessor, $qtdaula);
         break;

    case "Cancelar":
         header("Location: Curso.php");
         break;
  }

?>