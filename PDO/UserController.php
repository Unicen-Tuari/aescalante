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
    function registry(){
         
    }

}

?>