<?php

class Aluno_Model{
    var $conexao;

    # Metodo Construtor
    public function __construct() {
       
		include("conexao/conexao.php");
    	$this->conexao = $conexao;
    }
    
    public function add($dados){
        $conexao = $this->conexao;
        $ra = $dados['Ra'];
        $IdAluno = ['IdAluno'];
        $nome =$dados['Nome'];
        $email = $dados['Email'];
        $curso = $dados['CursoFaculdade'];
        $senha = $dados ['Senha'];
        
        
        $sql = "INSERT INTO aluno (`Ra`, `CursoFaculdade`, `Nome`, `Email`,`IdAluno` ,`Senha`) 
                VALUES ('$Ra', '$CursoFaculdade', '$Nome', '$Email' ,'$email','$senha');";
         $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
         mysqli_close($conexao);
         header("Location: aluno.php"); 
    }
    public function alter($data){
        $conexao = $this->conexao;
        $IdAluno = ['IdAluno'];
        $nome =$dados['Nome'];
        $email = $dados['Email'];
        $senha = $dados ['Senha'];


        $sql = "UPDATE aluno 
                SET CursoFaculdade='$CursoFaculdade', Nome='$Nome', Email='$Email','Senha=$senha' WHERE IdAluno='$IdAluno'";
         $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
         mysqli_close($conexao);
         header("Location: aluno.php");
    }
    public function delete($RA){
        $conexao = $this->conexao;
       
        $sql = "DELETE FROM aluno WHERE RA='$RA'";
        $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
        mysqli_close($conexao);
        header("Location: aluno.php"); 

    }

    public function exibir_cursosA($nome){
        echo $nome;
        
        $conexao = $this->conexao;
        $query = "SELECT aprendizado.IDcurso ,aprendizado.presenca , curso.QTDaula
                    FROM aprendizado
                    INNER JOIN curso on aprendizado.IDcurso = curso.Nome 
                    where IDaluno = '$nome'";
        $resultado = mysqli_query($conexao,$query);
            return $resultado;
    }
}


?>