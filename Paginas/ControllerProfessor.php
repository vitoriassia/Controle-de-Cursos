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

    public function add_professor($dados,$ra){
        $model =$this->model;
        $ra = $ra ;
        $nome =$dados['Nome'];
        $email = $dados['Email'];
        $data = array (

            'RA'=> $ra,
            'Nome'=>$nome,
            'Email' => $email

        );
        $model -> add($data);
        
         
        

}
    public function delete_professor($RA){
           
        $model =$this->model;
        $model -> delete($RA);
        
       
    
}
public function alter_professor($dados,$RA){
           
            $model =$this->model;
            $nome =$dados['Nome'];
            $email = $dados['Email'];
            $data = array (

                'RA'=> $RA,
                'Nome'=>$nome,
                'Email' => $email

            );
            $model -> alter($data);
            
                    
            
    
}
public function get_professor($ra){
                $model =$this->model;
                return $model -> exibir_professor($ra);
}
    
}

?>