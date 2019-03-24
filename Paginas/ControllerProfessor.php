<?php

class Professor{
    
    # Atributos
    var $model;

    # Metodo Construtor
    public function __construct(){
        require_once 'ProfessorModel.php';
        $this->model = new Professor_Model();
    }

  

    # Metodos
    function Presenca(){

    }

    public function add_professor($dados){
        $model =$this->model;
        $nome =$dados['Nome'];
        $email = $dados['Email'];
        $idprofessor = $dados['IdProfessor'];
        $senha = $dados['Senha'];
        $data = array (

            'Nome'=>$nome,
            'Email' => $email,
            'IdProfessor' => $idprofessor,
            'Senha' => $senha



        );
        $model -> add($data);
        
         
        

}
    public function delete_professor($IdProfessor){
           
        $model =$this->model;
        $model -> delete($IdProfessor);
        
       
    
}
public function alter_professor($dados){
           
            $model =$this->model;
            $nome =$dados['Nome'];
            $email = $dados['Email'];
            $idprofessor = $dados['IdProfessor'];
            $senha = $dados['Senha'];
            $data = array (

                
            'Nome'=>$nome,
            'Email' => $email,
            'IdProfessor' => $idprofessor,
            'Senha' => $senha

            );
            $model -> alter($data);
            
                    
            
    
}
public function get_professor($id){
                $model =$this->model;
                return $model -> exibir_professor($id);
}
    
}

?>