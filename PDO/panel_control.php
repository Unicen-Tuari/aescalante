<?php 
  require_once "database.php";
  require_once ('templateEngine/libs/Smarty.class.php');

function home($member = null){
  $players= getPlayers();           
  $smarty = new Smarty();
  $smarty -> assign('players',$players);
  $smarty -> display('templateEngine/templates/index.tpl');
}

function addPlayer(){
  insertPlayer($_GET["name"],$_GET["surname"],$_GET["nickname"],$_GET["id_position"],);
  header("Location: home");
}

function removePlayer($params){
  deletePlayer($params[0]);
  header("Location: ../home");
}
?>


