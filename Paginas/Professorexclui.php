<?php
  
  $RA=$_POST['RA'];
  $Nome=$_POST['Nome'];
  $Email=$_POST['Email'];
  
  echo "<form name=form1 method=post action=Professorfazer.php>";
  echo "RA: <input type=text name=RA value=".$RA."><br>";
  echo "Nome: <input type=text name=Nome value=".$Nome."><br>";
  echo "Email: <input type=text name=Email value=".$Email."><br>";
  echo "<input type=submit name=acao value=Excluir> ";
  echo "<input type=submit name=acao value=Cancelar>";
  echo "</form>";

?>