<?php 
  require_once "database.php";
  require_once ('templateEngine/libs/Smarty.class.php');

function home($member = null){
  $players= getPlayers(); 
  $positions= getPositions();           
  $smarty = new Smarty();
  $smarty -> assign('players',$players);
  $smarty -> assign('positions',$positions);
  $smarty -> display('templateEngine/templates/players_adm.tpl');
}


function addPlayer(){
  insertPlayer($_GET["name"],$_GET["surname"],$_GET["nickname"],$_GET["id_position"],);
  header("Location: home");
}
function addPosition(){
  insertPosition($_GET["id_position"],$_GET["name"]);
  header("Location: home");
}

function removePlayer($params){
  deletePlayer($params[0]);
  header("Location: ../home");
}
?>


