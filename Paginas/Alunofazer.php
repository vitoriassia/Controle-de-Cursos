<?php
  // Recebimento das variaveis 
  if (isset($_POST["RA"]))
  {
	 $RA=$_POST["RA"];
  }
  $CursoFaculdade=$_POST['CursoFaculdade'];
  $Nome=$_POST['Nome'];
  $Email=$_POST['Email'];
  $Presenca=$_POST['Presenca'];
  $acao=$_POST['acao'];
 
  // Realizar as ações da tabela aluno 

  switch ($acao) {

    case "Alterar":
         include("conexao/conexao.php");
         $sql = "UPDATE aluno SET CursoFaculdade='$CursoFaculdade', Nome='$Nome', Email='$Email' WHERE RA='$RA'";
         $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
         mysqli_close($conexao);
         header("Location: aluno.php");
         break;

    case "Excluir":
         include("conexao/conexao.php");
         $sql = "DELETE FROM aluno WHERE RA='$RA'";
         $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
         mysqli_close($conexao);
         header("Location: aluno.php"); 
         break;

    case "Incluir":
         include("conexao/conexao.php");
         $sql = "INSERT INTO aluno (`RA`, `CursoFaculdade`, `Nome`, `Email`) VALUES ('$RA', '$CursoFaculdade', '$Nome', '$Email');";
         $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
         mysqli_close($conexao);
         header("Location: aluno.php"); 
         break;

    case "Cancelar":
         header("Location: aluno.php");
         break;
  }

?>