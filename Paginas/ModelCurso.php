<?php
class curso_model{
    public function __construct()
    {
        include("conexao/conexao.php");
    }

    public function add_curso($data){
        $sql = "INSERT INTO curso  VALUES ('$data');";
         $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
         mysqli_close($conexao);
         header("Location: Professor.php");
    }








}


?>