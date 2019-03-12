<?php
require_once 'ControllerCurso.php';
require_once 'consultaBanco.php';
  //Incluindo a conexão com banco de dados   
  if($_SERVER['REQUEST_METHOD'] == 'POST') { // aqui é onde vai decorrer a chamada se houver um *request* POST
    session_start();  
    if (isset($_POST["IDcurso"]))
  {
	 $IDcurso=$_POST["IDcurso"];
  }
    $acao = $_POST["acao"];

    $nameimg = 'None'; 
            
   
    

  // Realizar as ações da tabela curso 
  switch ($acao) {

    case "Alterar":
          $Banco = get_curso($IDcurso);
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
          $newcurso ->delete($IDcurso);
          break;
    case "adicionar":
          $newcurso = new Curso($_POST,$_SESSION['Nome'],$IDcurso,$nameimg);
          $nome= $newcurso -> getNome();
                  // Upando a imagem
          $_UP['pasta']= 'iconecurso/';
          $_UP ['tamanho'] = 1024 + 1024 + 100;
          $extensao= strtolower(end(explode('.',$_FILES['imagem']['name'])));
          $nome_final = $nome.'.'. $extensao;
          move_uploaded_file ($_FILES['imagem'] ['tmp_name'],$_UP['pasta'].$nome_final);
          $newcurso -> setnameimg($nome_final);
                  $newcurso ->add();
                
            break;

    case "Cancelar":
         header("Location: Curso.php");
         break;
  
  }
}
?>