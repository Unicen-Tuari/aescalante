<?php
require_once("NewView.php");
require_once("NewModel.php");
require_once("PositionsModel.php");

class NewController{

    private $view;
    private $model;
    private $p_model;

    function __construct(){
        $this->view = new NewView();
        $this->model = new NewModel();
        $this->p_model = new PositionsModel();

         session_start();
        if(!isset($_SESSION["nombre"])){
            header ("Location: login" );
            die();
        }

    }

    function home($member = null){
        $players = $this->model->getPlayers();
        $positions = $this->p_model->getPositions();           
        $this->view->ShowHome($players,$positions);
    }
    
    function addPlayer(){
        $this->model->insertPlayer($_GET["name"],$_GET["surname"],$_GET["nickname"],$_GET["number"],$_GET["id_position"],);
        header("Location: home");
    }
    function editPlayer($params){
        $positions=$this->p_model->getPositions();
        $id_player = $params[0];
        $player = $this->model->getPlayer($id_player);
        $this->view->ShowFormEdit($player,$positions);
      }
      
      function editFinish(){
        // print $_GET['id_player'],$_GET["surname"],$_GET["nickname"],$_GET["id_position"]);
        $this->model->renamePlayer($_GET['id_player'],$_GET["name"],$_GET["surname"],$_GET["nickname"],$_GET["id_position"]);
        header("Location: home");
      }
    
    function marckedPlayer($params){
        $this->model->markFinished($params[0]);
        header("Location: ../home");
    }
    function removePlayer($params){
        $this->model->deletePlayer($params[0]);
        header("Location: ../home");
    }
    

}



?>