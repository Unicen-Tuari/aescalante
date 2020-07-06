<?php
require_once("NewView.php");
require_once("NewModel.php");
require_once("PositionsModel.php");

class vistaUsuarioController{
    private $view;
    private $model;
    private $p_model;

    function __construct(){
        $this->view = new NewView();
        $this->model = new NewModel();
        $this->p_model = new PositionsModel();

    }
    function index($member = null){
        $this->view->ShowIndex();
    }
    function players($member = null){
        $players=$this->model->getPlayers();
        $positions=$this->p_model->getPositions();
        $this->view->ShowTeam($players,$positions);
    }
    function statistics($member = null){
        $this->view->ShowStatistics();
    }
}

?>