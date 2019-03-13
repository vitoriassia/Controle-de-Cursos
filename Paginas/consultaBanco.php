  
  <?php
  
  
  
    function get_todosCursos(){

                include("conexao/conexao.php");
                $query = "SELECT * FROM curso";
                $resultado = mysqli_query($conexao,$query);
                return $resultado;

    }
    function get_Curso($IDcurso){
                include("conexao/conexao.php");
                $query = "SELECT * FROM curso WHERE IDcurso LIKE '$IDcurso'";
                $resultado = mysqli_query($conexao,$query);
                return $linha = mysqli_fetch_array($resultado);

    }


    ?>