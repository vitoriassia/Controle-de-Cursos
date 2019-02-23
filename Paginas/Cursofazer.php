<?php
  //Incluindo a conexão com banco de dados   
session_start();  

  // Recebimento das variaveis 

if (isset($_POST["IDcurso"]))
  {
	 $IDcurso=$_POST["IDcurso"];
  }
  $Nome=$_POST['Nome'];
  $QTDaula=$_POST['QTDaula'];
  $IDprofessor=$_SESSION['Nome'];
  $acao=$_POST['acao'];

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

    case "Incluir":
         include("conexao/conexao.php");
         $sql = "INSERT INTO curso (`Nome`, `IDprofessor`, `QTDaula`) VALUES ('$Nome','$IDprofessor', '$QTDaula');";
         $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
         mysqli_close($conexao);
         header("Location: Curso.php"); 
         break;

    case "Cancelar":
         header("Location: Curso.php");
         break;
  }

?>