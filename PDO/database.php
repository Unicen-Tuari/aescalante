<?php

function getPlayers(){
    $db = new PDO('mysql:host=localhost;dbname=the_new_sensation; charset=utf8','root','');
    $sentencia = $db->prepare("SELECT * FROM player");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function getPositions(){
    $db = new PDO('mysql:host=localhost;dbname=the_new_sensation; charset=utf8','root','');
    $sentencia = $db->prepare("SELECT * FROM position");
    $sentencia->execute();
    return $sentencia->fetchAll();
}
function getPlayerPositions($id_position){
    $db = new PDO('mysql:host=localhost;dbname=the_new_sensation; charset=utf8','root','');
    $sentencia = $db->prepare("SELECT * FROM player where id_position=?");
    $sentencia->execute($id_position);
    return $sentencia->fetchAll();
}

function insertPlayer($name,$surname,$nickname,$id_position){
    $db = new PDO('mysql:host=localhost;dbname=the_new_sensation; charset=utf8','root','');
    $sentencia = $db->prepare("INSERT INTO player(name,surname,nickname,id_position) VALUES(?,?,?,?)");
    if( (($name && $surname) != '') /*&& (is_string($name))*/ ){
    $sentencia->execute(array($name,$surname,$nickname,$id_position));
    }
}

function insertPosition($name){
    $db = new PDO('mysql:host=localhost;dbname=the_new_sensation; charset=utf8','root','');
    $sentencia = $db->prepare("INSERT INTO position(id_position,name) VALUES(?,?)");
    $sentencia->execute(array($name));
}

function deletePlayer($id_player){
    $db = new PDO('mysql:host=localhost;dbname=the_new_sensation; charset=utf8','root','');
    $sentencia = $db->prepare("DELETE FROM player WHERE id_player=?");
    $sentencia->execute(array($id_player));
}
function deletePosition($id_position){
    $db = new PDO('mysql:host=localhost;dbname=the_new_sensation; charset=utf8','root','');
    $sentencia = $db->prepare("DELETE FROM position WHERE id_position=?");
    $sentencia->execute(array($id_position));
}

?>