<?php

function getPlayers(){
    $db = new PDO('mysql:host=localhost;dbname=the_new_sensation; charset=utf8','root','');
    $sentencia = $db->prepare("SELECT * FROM player");
    $sentencia->execute();
    return $sentencia->fetchAll();
}
function insertPlayer($name,$surname,$nickname,$id_position){
    $db = new PDO('mysql:host=localhost;dbname=the_new_sensation; charset=utf8','root','');
    $sentencia = $db->prepare("INSERT INTO player(name,surname,nickname,id_position) VALUES(?,?,?,?)");
   /* if( (($name && $surname) != '') && (is_string($name))){*/
    $sentencia->execute(array($name,$surname,$nickname,$id_position));
    /*}*/
}
function deletePlayer($id_player){
    $db = new PDO('mysql:host=localhost;dbname=the_new_sensation; charset=utf8','root','');
    $sentencia = $db->prepare("DELETE FROM player WHERE id_player=?");
    $sentencia->execute(array($id_player));
}

?>