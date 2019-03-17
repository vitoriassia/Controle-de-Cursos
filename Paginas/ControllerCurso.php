<?php

class Curso{

    # Atributos
    var $IDcurso;
    var $IDprofessor;
    var $model;

    # Metodo Construtor
    public function __construct() {
       
        require_once 'Curso_Model.php';
		
	}
    # Metodos
    public function add_curso($dados,$sessao,$IDcurso){
        $model = new Curso_Model();
        $nome = $dados['Nome'];
        $qtd = $dados ['QTDaula'];
        $descricao = $dados['Descricao'];
        $dateStart = $dados['dataStart'];
        $dateEnd = $dados['dateEnd'];
        // Upando a imagem
        $_UP['pasta']= 'iconecurso/';
        $_UP ['tamanho'] = 1024 + 1024 + 100;
        $extensao= strtolower(end(explode('.',$_FILES['imagem']['name'])));
        $nome_final = $nome.'.'. $extensao;
        move_uploaded_file ($_FILES['imagem'] ['tmp_name'],$_UP['pasta'].$nome_final);
        
        
        $data = array (
             'IDcurso' => $IDcurso,
             'IDprofessor' => $sessao,
             'Nome' => $nome,
             'QTDaula' => $qtd,
             'Descricao' => $descricao,
             'dataStart' => $dateStart,
             'dateEnd' => $dateEnd,
             'nome_imagem' =>$nome_final
         );
        
         $model -> add($data);
        
    }

    public function delete_curso($IDcurso){
        $model = new Curso_Model();
        $pastaDel = 'iconecurso';
        $banco = $model ->get_Curso($IDcurso);
        $nome = $banco ['nome_imagem'];
        unlink($pastaDel.'/'.$nome);
        $model -> delete($IDcurso);
           
           
        
    }
    public function alter_curso($dados,$sessao,$IDcurso){
               
        $model = new Curso_Model();
        $banco = $model -> get_curso($IDcurso);
        $nome = $dados['Nome'];
        $qtd = $dados ['QTDaula'];
        $descricao = $dados['Descricao'];
        $dateStart = $dados['dataStart'];
        $dateEnd = $dados['dateEnd'];
        $nome1 = $banco['nome_imagem'];

        // Upando a imagem
         try {
            $_UP['pasta']= 'iconecurso/';
            $_UP ['tamanho'] = 1024 + 1024 + 100;
            $extensao1= explode('.',$_FILES['imagem']['name']);
            $extensao = strtolower(end($extensao1));
            $nome_final = $nome.'.'. $extensao;
            move_uploaded_file ($_FILES['imagem'] ['tmp_name'],$_UP['pasta'].$nome_final);
            $pastaDel = 'iconecurso';
            if ($nome1 != $nome_final){
              unlink($pastaDel.'/'.$nome1);
            }
            
            $data = array (
                'IDcurso' => $IDcurso,
                'Nome' => $nome,
                'QTDaula' => $qtd,
                'Descricao' => $descricao,
                'dataStart' => $dateStart,
                'dateEnd' => $dateEnd,
                'nome_imagem' =>$nome_final
            );
           
            $model -> alter($data,$IDcurso);
            } catch (Exeption $e){
                $data = array (
                    'IDcurso' => $IDcurso,
                    'Nome' => $nome,
                    'QTDaula' => $qtd,
                    'Descricao' => $descricao,
                    'dataStart' => $dateStart,
                    'dateEnd' => $dateEnd,
                    'nome_imagem' =>$nome1
                );
               
                $model -> alter($data,$IDcurso);
            }        
        
    }
  
}

  



?>