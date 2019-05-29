<?php

require_once 'ControllerCurso.php';
  //Incluindo a conexão com banco de dados   
  if($_SERVER['REQUEST_METHOD'] == 'POST') { // aqui é onde vai decorrer a chamada se houver um *request* POST
    session_start();  
    if (isset($_POST["IdCurso"]))
  {
	 $idcurso= $_POST["IdCurso"];  }
  
    $acao = $_POST["acao"];

    
    $curso = new Curso();
  // Realizar as ações da tabela curso 
  switch ($acao) {

    case "Alterar":
          $curso->nome = $_POST['Nome'];
          $curso->qtd = $_POST ['QtdAula'];
          $curso->descricao = $_POST['Descricao'];
          $curso->dateStart = $_POST['DateStart'];
          $curso->dateEnd = $_POST['DateEnd'];
          $curso->idcurso=$_POST["IdCurso"];
          $curso->alter_curso();
            break;

    case "Excluir":
          $curso->idcurso=$_POST["IdCurso"];
          $curso -> delete_curso();
            break;
    case "adicionar":
          $curso->nome = $_POST['Nome'];
          $curso->qtd = $_POST ['QtdAula'];
          $curso->descricao = $_POST['Descricao'];
          $curso->dateStart = $_POST['DateStart'];
          $curso->dateEnd = $_POST['DateEnd'];
          $curso->idprofessor = $_SESSION['Id'];

          $curso->add_curso();
            break;

    case "Cancelar":
         header("Location: curso.php");
         break;
  
  }
}
?>  