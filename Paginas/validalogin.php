<?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
    include_once("conexao/conexao.php");   
    require_once 'professor/ControllerProfessor.php';
    require_once 'aluno/ControllerAluno.php';
    $professor = new Professor();
    $aluno = new Aluno();
    $exibirP= $professor->get_professorS($_POST['Email']);
    $exibirA =$aluno->get_AlunoS($_POST['Email']);

    ?>

<?php

    $idp = $exibirP['IdProfessor'];
    $query = "SELECT IdCurso FROM curso WHERE IdProfessor = '$idp'";
    $resultado1008 = mysqli_query($conexao,$query);
    $idc = mysqli_fetch_array($resultado1008);

    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['Email'])) && (isset($_POST['Senha']))){
        $Email = mysqli_real_escape_string($conexao, $_POST['Email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $Senha = mysqli_real_escape_string($conexao, $_POST['Senha']);
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM aluno  WHERE aluno.Email = '$Email' && aluno.Senha = '$Senha' ";
        $resultado_usuario = mysqli_query($conexao, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);

        $result_usuario1 = "SELECT * FROM professor WHERE  professor.Email = '$Email' && professor.Senha = '$Senha' ";
        $resultado_usuario1 = mysqli_query($conexao, $result_usuario1);
        $resultado1 = mysqli_fetch_assoc($resultado_usuario1);
        $resultado1_1=mysqli_fetch_array($resultado_usuario1);


        
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado) or isset($resultado1) ){
            if(isset($resultado)){
                
            $_SESSION['Email'] = $_POST['Email'];
            $_SESSION['Senha'] = $_POST['Senha'];  
            $_SESSION['Id'] = $exibirA['IdAluno'];
            $_SESSION['Nome'] = $exibirA['Nome'];
            $_SESSION["logado"] = True;
            $_SESSION["tipo"]= "Aluno";	
            $_SESSION["erro"] = '';
            header("Location: home.php");

            }elseif(isset($resultado1)){ 
                $id=$resultado1_1['IdProfessor'];
                $_SESSION['Email'] = $_POST['Email'];
                $_SESSION['Senha'] = $_POST['Senha'];  
                $_SESSION['Id'] = $exibirP['IdProfessor'];

//                $_SESSION['idcurso']= $idc[0];
                $_SESSION["logado"] = True;	
                $_SESSION["tipo"]= "Professor";
                $_SESSION["erro"] = '';
                header("Location: professor/Professor.php");
            }     
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION["logado"] = FALSE;
            $_SESSION["erro"] = '<br> Email ou senha incorreto';
            header("Location: Login.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION["logado"] = FALSE;
        $_SESSION["erro"] = '<br> Email ou senha incorreto';
        header("Location: Login.php");
    }
?>