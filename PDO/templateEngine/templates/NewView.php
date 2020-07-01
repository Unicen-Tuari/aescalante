<?php
require_once 'templateEngine\libs\Smarty.class.php';

class NewView {

    private $smaty;

    function __construct(){
        $this->smarty = new $smarty;
    }

    function ShowHome($member = null){
        $this->smarty -> assign('players',$players);
        $this->smarty -> assign('positions',$positions);
        $this->smarty -> display('templateEngine/templates/players_adm.tpl');
      }
}





?>