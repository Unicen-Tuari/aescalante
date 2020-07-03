<?php
require_once 'templateEngine\libs\Smarty.class.php';


class NewView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty;
    }

    function ShowHome($players,$positions){
        $this->smarty->assign('players',$players);
        $this->smarty->assign('positions',$positions);
        $this->smarty->display('templateEngine/templates/players_adm.tpl');
      }

      function ShowPositions($positions,$players){
        $this->smarty -> assign('positions',$positions);
        $this->smarty -> assign('players',$players);
        $this->smarty -> display('templateEngine/templates/positions_adm.tpl');
      }

      function ShowFormEdit($player,$positions){
        $this->smarty -> assign('positions',$positions);
        $this->smarty -> assign('player',$player);
        $this->smarty -> display('templateEngine/templates/rename.tpl');
      }
      function ShowIndex(){
        $this->smarty->display('templateEngine/templates/index.tpl');
      }
      function ShowTeam(){
        $this->smarty->display('templateEngine/templates/players.tpl');

      }
      function ShowStatistics(){
        $this->smarty->display('templateEngine/templates/statistics.tpl');
      }



}





?>