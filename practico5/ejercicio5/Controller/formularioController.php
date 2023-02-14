<?php
include_once('./View/formularioView.php');
include_once('./Model/formularioModel.php');


class formularioController{
    private $model;
    private $view;

    function __construct(){
        $this->view = new formularioView();
        $this->model = new formularioModel();
    }

    function showHome(){
        $params =[];
        $params2 = [];
        $this->view->showHome($params, $params2);
    }

    function register(){
        if((!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password']))
             && ($_POST['password'] === $_POST['password2'])){
                $this->model->insertRegister($_POST['email'],$_POST['password'],$_POST['password2']);
                $this->view->showHome($_POST['email'], 'Añadido correctamente');
        }else{
            $this->view->showHome($_POST['email'], 'Las contrañas no coinciden');
        }
    }
}