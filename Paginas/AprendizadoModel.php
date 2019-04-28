<?php
/**
 * Created by PhpStorm.
 * User: pe_lf
 * Date: 18/03/2019
 * Time: 22:38
 */
class AprendizadoModel{

    var $conexao;

    # Metodo Construtor
    public function __construct() {
        include("conexao/conexao.php");
        $this->conexao = $conexao;
    }

    public function Add($data){
        $conexao = $this->conexao;
        $idcurso = $data['IdCurso'];
        $idaluno = $data ['IdAluno'];
        $sql = "INSERT INTO aprendizado(`IdCurso`, `IdAluno` , `Presenca`) 
                VALUES ('$idcurso', '$idaluno', 0);";
        $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
        mysqli_close($conexao);
        header("Location: professor.php");
    }

    public function Presenca($data){
        $conexao = $this->conexao;
        $idcurso= $data['IdCurso'];
        $idaluno = $data['IdAluno'];

        
        $sql = "UPDATE aprendizado 
                    SET Presenca=Presenca+1, DataAula=NOW() WHERE IdAluno='$idaluno' AND IdCurso='$idcurso'";
        $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
        mysqli_close($conexao);
        header("Location: professor.php");
    }

    public function Delete($data){
        $conexao = $this->conexao;
        $IDcurso= $data['IdCurso'];
        $Email = $data['Email'];

        $sql = "DELETE FROM aprendizado WHERE Email='$Email' AND IDcurso='$IDcurso'";
        $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
        mysqli_close($conexao);
        header("Location: professor.php");

    }
    public function get_presenca($id){
        $conexao = $this->conexao;
        $query = "SELECT Presenca FROM aprendizado where IdAluno = '$id'";
        $resultado = mysqli_query($conexao,$query);
        
            return mysqli_fetch_row($resultado);

    }

}

?>