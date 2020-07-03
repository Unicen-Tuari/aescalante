<?php /*
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

/*function positions($member = null){
  $players= getPlayers(); 
  $positions= getPositions();           
  $smarty = new Smarty();
  $smarty -> assign('players',$players);
  $smarty -> assign('positions',$positions);
  $smarty -> display('templateEngine/templates/positions_adm.tpl');
}

function positions($member = null){
  $positions=getPositions();
  $players= getPlayers();
  $smarty = new Smarty();
  $smarty -> assign('positions',$positions);
  $smarty -> assign('players',$players);
  $smarty -> display('templateEngine/templates/positions_adm.tpl');
}
function editPlayer($params){
  $positions=getPositions();
  $id_player = $params[0];
  $player = getPlayer($id_player);
  $smarty = new Smarty();
  $smarty -> assign('player',$player);
  $smarty -> assign('positions',$positions);
 // $smarty -> assign('players',$players);
  $smarty -> display('templateEngine/templates/rename.tpl');
}

function editFinish(){
  /* print $_GET['id_player'],$_GET["surname"],$_GET["nickname"],$_GET["id_position"]);
  renamePlayer($_GET['id_player'],$_GET["name"],$_GET["surname"],$_GET["nickname"],$_GET["id_position"]);
  header("Location: home");
}
function addPlayer(){
  insertPlayer($_GET["name"],$_GET["surname"],$_GET["nickname"],$_GET["id_position"],);
  header("Location: home");
}


function addPosition(){
  insertPosition($_GET['name']);
  header("Location: positions");
}

function removePlayer($params){
  deletePlayer($params[0]);
  header("Location: ../home");
}
function removePosition($params){
  deletePosition($params[0]);
  header("Location: ../positions");
}
*/
?>


