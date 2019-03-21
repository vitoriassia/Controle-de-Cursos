<?php
class Professor_Model {
    var $conexao;

    # Metodo Construtor
    public function __construct() {
       
		include("conexao/conexao.php");
    	$this->conexao = $conexao;
    }

    //exibir professor
    public function exibir_professor($id){
        $conexao = $this->conexao;
        $query = "SELECT * FROM professor WHERE RA LIKE '$id'";
        $resultado = mysqli_query($conexao,$query);
        return mysqli_fetch_array($resultado);
    }

    // adicionar
    public function add($data){
        $conexao = $this->conexao;
        $nome = $data ['Nome'];
        $email = $data['Email'];
        $IdProfessor=$data['IdProfessor'];
        $Senha = $data['Senha'];
        $sql = "INSERT INTO professor (`Nome`, `Email`,`IdProfessor`) VALUES ('$nome', '$email','$IdProfessor','$Senha');";
        $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
        mysqli_close($conexao);
        header("Location: professor.php"); 
    }
    
    //alterar
    public function alter($data){
            $conexao = $this->conexao;
            $nome = $data ['Nome'];
            $email = $data['Email'];
            $IdProfessor=$data['IdProfessor'];
            $Senha = $data['Senha'];
            $sql = "UPDATE professor SET Nome='$nome', Email='$email', 'Senha =$Senha' WHERE IdProfessor='$IdProfessor'";
            $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
            mysqli_close($conexao);
            header("Location: professor.php"); 
           
    }
    
    public function delete($id){
        $conexao = $this->conexao;
        $sql = "DELETE FROM professor WHERE RA='$id'";
        $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
        mysqli_close($conexao);
        header("Location: Login.php"); 
    }
    
}






?>