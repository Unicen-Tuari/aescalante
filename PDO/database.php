<?php

 
function getPlayers(){
    $db = new PDO('mysql:host=localhost;dbname=the_new_sensation; charset=utf8','root','');
    $sentencia = $db->prepare("SELECT * FROM jugador");
    $sentencia->execute();
    return $sentencia->fetchAll();
}
function insertPlayer($nombre,$apellido,$posicion,$apodo){
    $db = new PDO('mysql:host=localhost;dbname=the_new_sensation; charset=utf8','root','');
    $sentencia = $db->prepare("INSERT INTO jugador(nombre,apellido,posicion,apodo) VALUES(?,?,?,?)");
   /* if( (($nombre && $apellido) != '') && (is_string($nombre)){*/
    $sentencia->execute(array($nombre,$apellido,$posicion,$apodo));
    }
/*}*/
function deletePlayer($id_player){
    $db = new PDO('mysql:host=localhost;dbname=the_new_sensation; charset=utf8','root','');
    $sentencia = $db->prepare("DELETE FROM jugador WHERE id_player=?");
    $sentencia->execute(array($id_player));
}

?>