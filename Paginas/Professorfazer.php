<?php
  // Recebimento das variaveis 
  if (isset($_POST["RA"]))
  {
	 $RA=$_POST["RA"];
  }
  $Nome=$_POST['Nome'];
  $Email=$_POST['Email'];
  $acao=$_POST['acao'];

  // Realizar as ações da tabela Professor 
 
  switch ($acao) {

    case "Alterar":
         include("conexao/conexao.php");
         $sql = "UPDATE professor SET Nome='$Nome', Email='$Email' WHERE RA='$RA'";
         $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
         mysqli_close($conexao);
         header("Location: professor.php");
         break;

    case "Excluir":
         include("conexao/conexao.php");
         $sql = "DELETE FROM professor WHERE RA='$RA'";
         $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
         mysqli_close($conexao);
         header("Location: professor.php"); 
         break;

    case "Incluir":
         include("conexao/conexao.php");
         $sql = "INSERT INTO professor (`RA`, `Nome`, `Email`) VALUES ('$RA', '$Nome', '$Email');";
         $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
         mysqli_close($conexao);
         header("Location: professor.php"); 
         break;

    case "Cancelar":
         header("Location: professor.php");
         break;
  }

?>