<?php

class Aluno_Model{
    var $conexao;

    # Metodo Construtor
    public function __construct() {
       
		include("../conexao/conexao.php");
    	$this->conexao = $conexao;
    }

    
    public function add($dados){
        $conexao = $this->conexao;
        $ra = $dados['Ra'];
        $IdAluno = $dados['IdAluno'];
        $nome =$dados['Nome'];
        $email = $dados['Email'];
        $curso = $dados['CursoFaculdade'];
        $senha = $dados ['Senha'];
        
        
        $sql = "INSERT INTO aluno (`Ra`, `CursoFaculdade`, `Nome`, `Email`,`IdAluno` ,`Senha`) 
                VALUES ('$ra', '$curso', '$nome', '$email' ,'$IdAluno','$senha');";
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

    public function exibir_cursosA($id){
        $conexao = $this->conexao;
        $query = "SELECT aprendizado.IdCurso ,aprendizado.Presenca , curso.QtdAula
                    FROM aprendizado
                    INNER JOIN curso on aprendizado.IdCurso = curso.IdCurso
                    where IdAluno = '$id'";
        $resultado = mysqli_query($conexao,$query);
            return $resultado;
    }
    public function get_aluno($id){
        $conexao = $this->conexao;
        $query = "SELECT * FROM aluno WHERE IdAluno LIKE '$id'";
        $resultado = mysqli_query($conexao,$query);
        return mysqli_fetch_array($resultado);

    }
    public function get_alunoS($id){
        include ("conexao/conexao.php");
        $query = "SELECT * FROM aluno WHERE Email  LIKE '$id' ";
        $resultado = mysqli_query($conexao,$query);
        return mysqli_fetch_array($resultado);

    }
}


?>