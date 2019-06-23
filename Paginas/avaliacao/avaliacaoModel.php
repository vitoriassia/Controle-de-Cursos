<?php


class avaliacaoModel
{
    var $conexao;
    public function __construct() {

        include("../conexao/conexao.php");
        $this->conexao= $conexao;
    }
    public function  addAvaliacao($data){

        $idcurso= $data['idCurso'];
        $idaluno= $data['idAluno'];
        $nota = $data['nota'];
        $conexao= $this->conexao;


        $sql = "INSERT INTO avaliacao (`IdAluno`, `IdCurso`, `Nota`) 
        VALUES ('$idaluno','$idcurso','$nota');";
        $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
        mysqli_close($conexao);
        header("Location: ../aluno/aluno.php");
    }
    public function getAvaliacoes($IDcurso){
        $conexao=$this->conexao;
        $query = "SELECT Nota FROM avaliacao WHERE IdCurso LIKE '$IDcurso' ";
        $resultado = mysqli_query($conexao,$query);
        return mysqli_fetch_array($resultado);
    }
}