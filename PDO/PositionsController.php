<?php

require_once("NewView.php");
require_once("NewModel.php");
require_once("PositionsModel.php");

class PositionsController{

    private $view;
    private $model;
    private $p_model;

    function __construct(){
        $this->view = new NewView();
        $this->model = new NewModel();
        $this->p_model = new PositionsModel();
    }
    function Home($member = null){
        $players = $this->model->getPlayers(); 
        $positions = $this->p_model->getPositions();           
        $this->view->ShowHome($players,$positions);
    }
    function positions($member = null){
        $positions=$this->p_model->getPositions();
        $players= $this->model->getPlayers();
        $this->view->ShowPositions($positions,$players);
      }
      function editFinish(){
        // print $_GET['id_player'],$_GET["surname"],$_GET["nickname"],$_GET["id_position"]);
        $this->model->renamePlayer($_GET['id_player'],$_GET["name"],$_GET["surname"],$_GET["nickname"],$_GET["id_position"]);
        header("Location: home");
      }
    
      function addPosition(){
        $this->p_model->insertPosition($_GET['name']);
        header("Location: positions");
    }
    function removePosition($params){
        $this->p_model->deletePosition($params[0]);
        header("Location: ../positions");
    }

}




?>