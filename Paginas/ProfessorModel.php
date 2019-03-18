<?php
class Professor_Model {
    var $conexao;

    # Metodo Construtor
    public function __construct() {
       
		include("conexao/conexao.php");
    	$this->conexao = $conexao;
    }

    //exibir professor
    public function exibir_professor($ra){
        $conexao = $this->conexao;
        $query = "SELECT * FROM professor WHERE RA LIKE '$ra'";
        $resultado = mysqli_query($conexao,$query);
        return mysqli_fetch_array($resultado);
    }

    // adicionar
    public function add($data){
        $conexao = $this->conexao;
        $ra = $data['RA'];
        $nome = $data ['Nome'];
        $email = $data['Email'];
        $sql = "INSERT INTO professor (`RA`, `Nome`, `Email`) VALUES ('$ra', '$nome', '$email');";
        $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
        mysqli_close($conexao);
        header("Location: professor.php"); 
    }
    
    //alterar
    public function alter ($data){
            $conexao = $this->conexao;
            $ra = $data['RA'];
            $nome = $data ['Nome'];
            $email = $data['Email'];
            $sql = "UPDATE professor SET Nome='$nome', Email='$email' WHERE RA='$ra'";
            $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
            mysqli_close($conexao);
            header("Location: professor.php"); 
           
    }
    
    public function delete($RA){
        $conexao = $this->conexao;
        $sql = "DELETE FROM professor WHERE RA='$RA'";
        $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
        mysqli_close($conexao);
        header("Location: Login.php"); 
    }
    
}






?>