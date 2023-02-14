<?php

class formularioModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=formulario;charset=utf8;','root','');
    }

    function insertRegister($email, $password, $password2){
        $query = $this->db->prepare("INSERT INTO users(email,password,password2) VALUES(?,?,?)");
        $query->execute(array($email,$password,$password2));
    }
}