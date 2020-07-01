<?php
require_once ("NewView.php");
require_once ("NewModel.php");

class NewController{

    private $view;
    private $model;

    function __construct(){
        $this->$view = new NewView();
        $this->$view = new NewModel();
    }

        
    function home($member = null){
        $players= $this->model->getPlayers(); 
        $positions= $this->model->getPositions();           
        $this->$view->ShowHome();
    }


}



?>