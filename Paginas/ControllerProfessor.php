<?php

class Professor{
    
    # Atributos
    var $RA;
    var $Nome;
    var $Email;
    var $acao;

    # Metodo Construtor
    public function Professor($dados,$RA){
        $this->RA = $RA= $RA;
        $this->Nome = $Nome=$dados['Nome'];
        $this->Email = $Email=$dados['Email'];
        $this ->acao = $acao=$dados['acao'];
    }

    # Metodos Getters e Setters

    public function getRA(){
        return $this->RA;
    }

    public function setRA($RA){                
        $this->RA;
    }

    public function getNome(){
        return $this->Nome;
    }

    public function setNome($Nome){
        $this->Nome;
    }

    public function getEmail(){
        return $this->Email;
    }

    public function setEmail($Email){
        $this->Email;
    }
    public function getAcao(){
        return $this->acao;
    }

    public function setAcao($acao){
        $this->acao;
    }
    

    # Metodos
    function Presenca(){

    }

    public function add(){
            
        $ra = $this->RA ;
        $nome =$this->Nome;
         $email = $this->Email;
        include("conexao/conexao.php");
         $sql = "INSERT INTO professor (`RA`, `Nome`, `Email`) VALUES ('$ra', '$nome', '$email');";
         $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
         mysqli_close($conexao);
         header("Location: professor.php"); 
         
        

}
    public function delete($RA){
           
        include("conexao/conexao.php");
        $sql = "DELETE FROM professor WHERE RA='$RA'";
        $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
        mysqli_close($conexao);
        header("Location: professor.php"); 
        
       
    
}
public function alter($Nome, $Email, $RA){
           
            include("conexao/conexao.php");
            $sql = "UPDATE professor SET Nome='$Nome', Email='$Email' WHERE RA='$RA'";
            $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
            mysqli_close($conexao);
            header("Location: professor.php");
                    
            
    
}
    
}

?>