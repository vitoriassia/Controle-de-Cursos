<?php
require_once 'ControllerCurso.php';
require_once 'consultaBanco.php';
  //Incluindo a conexão com banco de dados   
  if($_SERVER['REQUEST_METHOD'] == 'POST') { // aqui é onde vai decorrer a chamada se houver um *request* POST
    session_start();  
    if (isset($_POST["IDcurso"]))
  {
	 $IDcurso='1';
  }
  $IDcurso='1';
    $acao = $_POST["acao"];

    $nameimg = 'None'; 
            
    $Banco = get_curso($IDcurso);
    
    $newcurso = new Curso;
  // Realizar as ações da tabela curso 
  switch ($acao) {

    case "Alterar":
          $newcurso = new Curso($Banco,$_SESSION['Nome'],$IDcurso,$nameimg);
          $nome2= $Banco['nome_imagem'];
          $newcurso -> setNome($_POST["Nome"]);
          $newcurso -> setQTDaula($_POST["QTDaula"]);
          $newcurso -> setDescricao($_POST["Descricao"]);
          $newcurso -> setdateS($_POST["dataStart"]);
          $newcurso -> setdateE($_POST["dateEnd"]);
          $nome= $newcurso -> getNome();
          $data = $newcurso -> getdateS();
          echo $data;
          // Upando a imagem

          try {
          $_UP['pasta']= 'iconecurso/';
          $_UP ['tamanho'] = 1024 + 1024 + 100;
          $extensao1= explode('.',$_FILES['imagem']['name']);
          $extensao = strtolower(end($extensao1));
          $nome_final = $nome.'.'. $extensao;
          move_uploaded_file ($_FILES['imagem'] ['tmp_name'],$_UP['pasta'].$nome_final);
          $newcurso -> setnameimg($nome_final);
          $pastaDel = 'iconecurso';
          if ($nome2 != $nome_final){
            unlink($pastaDel.'/'.$nome2);
          }
          $newcurso ->alter();
          } catch (Exeption $e){
            $newcurso ->alter();
          }
          
            break;

    case "Excluir":
          $newcurso = new Curso($Banco,$_SESSION['Nome'],$IDcurso,$nameimg);
          $nome2= $Banco['nome_imagem'];
          $pastaDel = 'iconecurso';
          unlink($pastaDel.'/'.$nome2);
          $newcurso ->delete($IDcurso);
          break;
    case "adicionar":
            $newcurso->add_curso($_POST,$_SESSION['Nome'],$IDcurso);
            break;

    case "Cancelar":
         header("Location: Curso.php");
         break;
  
  }
}
?>