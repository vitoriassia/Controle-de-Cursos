<?php
$conexao = mysqli_connect("localhost","root","") or die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
$banco = mysqli_select_db($conexao,"controledecursos") or die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
?>
