<?php
include_once('./libs\smarty-4.3.0\libs\Smarty.class.php');

class formularioView{

    function __construct(){
    }

    function showHome($email, $mensaje){
        var_dump($email);
        var_dump($mensaje);
        $smarty = new Smarty();
        $smarty->assign('usuario', $email);
        $smarty->assign('mensaje', $mensaje);
        $smarty->display('./templates/home.tpl');
    }

    function showError($mensaje){
        $smarty = new Smarty();
        $smarty->assign('mensaje', $mensaje);
        $smarty->display('./templates/error.tpl');
    }
}