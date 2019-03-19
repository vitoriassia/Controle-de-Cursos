<?php
/**
 * Created by PhpStorm.
 * User: pe_lf
 * Date: 18/03/2019
 * Time: 22:38
 */

var $conexao;

# Metodo Construtor
public function __construct() {
    include("conexao/conexao.php");
    $this->conexao = $conexao;
}

public function Add($data){
    $conexao = $this->conexao;
    $IDcurso= $data['IDcurso'];
    $Email = $data ['Email'];


    $sql = "INSERT INTO aprendizado (`IDcurso`, `Email` , `presenca`  ) 
              VALUES ('$IDcurso', '$Email', 0);";
    $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
    mysqli_close($conexao);
    header("Location: professor.php");
}

public function Presenca($data){
    $conexao = $this->conexao;
    $IDcurso= $data['IDcurso'];
    $Email = $data['Email'];


    $sql = "UPDATE aprendizado 
                SET presenca=presenca+1, DataAula=NOW() WHERE Email='$Email' AND IDcurso='$IDcurso'";
    $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
    mysqli_close($conexao);
    header("Location: professor.php");
}

public function Delete($data){
    $conexao = $this->conexao;
    $IDcurso= $data['IDcurso'];
    $Email = $data['Email'];

    $sql = "DELETE FROM aprendizado WHERE Email='$Email' AND IDcurso='$IDcurso'";
    $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
    mysqli_close($conexao);
    header("Location: professor.php");

}


?>