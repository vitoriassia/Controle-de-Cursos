<?php

class Aluno_Model{
    var $conexao;

    # Metodo Construtor
    public function __construct() {
       
		include("conexao/conexao.php");
    	$this->conexao = $conexao;
    }
    
    public function add($data){
        $conexao = $this->conexao;
        $RA = $data['RA'];
        $Nome = $data ['Nome'];
        $Email = $data['Email'];
        $CursoFaculdade = $data['CursoFaculdade'];
        
        
        $sql = "INSERT INTO aluno (`RA`, `CursoFaculdade`, `Nome`, `Email`) 
                VALUES ('$RA', '$CursoFaculdade', '$Nome', '$Email');";
         $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
         mysqli_close($conexao);
         header("Location: aluno.php"); 
    }
    public function alter($data){
        $conexao = $this->conexao;
        $RA = $data['RA'];
        $Nome = $data ['Nome'];
        $Email = $data['Email'];
        $CursoFaculdade = $data['CursoFaculdade'];


        $sql = "UPDATE aluno 
                SET CursoFaculdade='$CursoFaculdade', Nome='$Nome', Email='$Email' WHERE RA='$RA'";
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