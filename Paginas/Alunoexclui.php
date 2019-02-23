<?php
  
  $RA=$_POST['RA'];
  $CursoFaculdade=$_POST['CursoFaculdade'];
  $Nome=$_POST['Nome'];
  $Email=$_POST['Email'];
  $Presenca=$_POST['Presenca'];
  
  echo "<form name=form1 method=post action=Alunofazer.php>";
  echo "RA: <input type=text name=RA value=".$RA."><br>";
  echo "CursoFaculdade: <input type=text name=CursoFaculdade value=".$CursoFaculdade."><br>";
  echo "Nome: <input type=text name=Nome value=".$Nome."><br>";
  echo "Email: <input type=text name=Email value=".$Email."><br>";
  echo "Presenca: <input type=text name=Presenca value=".$Presenca."><br>";
  echo "<input type=submit name=acao value=Excluir> ";
  echo "<input type=submit name=acao value=Cancelar>";
  echo "</form>";

?>