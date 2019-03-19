<?php
/**
 * Created by PhpStorm.
 * User: pe_lf
 * Date: 18/03/2019
 * Time: 22:35
 */
include_once("conexao/conexao.php");

class Aprendizado
{

    # Metodo Constructor
    public function __construct(){
        require_once 'AprendizadoModel.php';
        $this->model = new AprendizadoModel();
    }

    # Metodos

    /**
     * @param $Email
     * @param $IDcurso
     */
    public function AddPresenca($Email, $IDcurso){
        $model = $this->model;
        var $dados = array();
        $Email = $dados['Email'];
        $IDcurso = $dados['IDcurso'];
        $data = array (

            'IDcurso'=> $IDcurso,
            'Email'=>$Email

        );
        $model -> Presenca($data);

    }

    public function Inscrever($Email,$IDcurso){
        $model = $this->model;
        var $dados = array();
        $email = $dados['Email'];
        $curso = $dados['CursoFaculdade'];
        $data = array (

            'IDcurso'=> $IDcurso,
            'Email'=>$Email


        );
        $model -> Add($data);

    }

    public function Excluir($Email,$IDcurso){
        $model =$this->model;
        var $dados = array();
        $Email = $dados['Email'];
        $IDcurso = $dados['CursoFaculdade'];
        $data = array (

            'IDcurso'=> $IDcurso,
            'Email'=>$Email


        );
        $model -> Delete($data);

    }



}