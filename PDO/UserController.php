<?php
require_once("UserView.php");
require_once("UserModel.php");

class UserController {

    private $view;
    private $model;

    function __construct(){
        $this->view = new UserView();
        $this->model = new UserModel();
    }

    function login(){
        $this->view->ShowLogin();
    }

    function signIn(){
        $this->view->ShowSignIn();
    }

    function create(){

        if($_POST["email"]==""){
            //error
            return;
        }
        if($_POST["password"]==""){

            //error
            return;
        }
         $this->model->createUser($_POST["email"],$_POST["password"]);
         header ("Location: login" );
    }

    function toAccess(){

     $email =  $_POST["mail"];
     $password = $_POST["password"];

       $user = $this->model->getUser($email);
       $hash = $user["password"];
        if(password_verify($password,$hash)){
            session_start();
            $_SESSION["nombre"] = $user["mail"];
            header ("Location: home" );
        }else{
            header ("Location: login" );
        }
    }

    function logAut(){
        session_start();
        session_destroy();
        header ("Location: login" );
    }
}

?>