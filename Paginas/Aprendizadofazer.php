<?php
  //INICIO A SESSÃO
  session_start();
  // Recebimento das variaveis 
  if (isset($_POST["Nome"]))
  {
	 $Nome=$_POST["Nome"];
  }
  $Nomea= $_SESSION['Nome'];
  $acao=$_POST['acao'];
  $IDcurso=$_POST['IDcurso'];
  $presente = $_POST["presente"];

 // Realizar as ações da tabela aprendizado 

  switch ($acao) {

    case "Presença":        
         foreach($presente as $key => $alunoComPresenca){
         include("conexao/conexao.php");
         $sql = "UPDATE aprendizado SET presenca=presenca+1 , DataAula=NOW()  WHERE IDaluno='$alunoComPresenca' AND IDcurso='$IDcurso' ";
         $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
         mysqli_close($conexao);
        }
         header("Location: professor.php");
         break;

    case "Excluir":
         include("conexao/conexao.php");
         $sql = "DELETE FROM aprendizado WHERE RA='$RA'";
         $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
         mysqli_close($conexao);
         header("Location: curso.php"); 
         break;

    case "Inscrever":
         include("conexao/conexao.php");
         $sql = "INSERT INTO aprendizado (`IDcurso`, `IDaluno` , `presenca`  ) VALUES ('$Nome', '$Nomea', 0);";
         $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
         mysqli_close($conexao);
         header("Location: curso.php"); 
         break;

    case "Cancelar":
         header("Location: curso.php");
         break;
  }

?>