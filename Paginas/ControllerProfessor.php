<?php

class Professor{
    
    # Atributos
    var $RA;
    var $Nome;
    var $Email;

    # Metodo Construtor
    public function Professor($RA , $Nome  , $Email){
        $this->RA = setRA($RA);
        $this->Nome = setNome($Nome);
        $this->Email = setEmail($Email);
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
    

    # Metodos
    function Presenca(){

    }
    
    
}

?>