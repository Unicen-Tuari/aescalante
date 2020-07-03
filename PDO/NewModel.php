<?php

class NewModel{

            private $db;

            function __construct(){

                $this->db = new PDO('mysql:host=localhost;dbname=the_new_sensation; charset=utf8','root','');

            }
            function getPlayers(){
                $sentencia = $this->db->prepare("SELECT * FROM player");
                $sentencia->execute();
                return $sentencia->fetchAll(PDO::FETCH_ASSOC);
            }

            function getPlayer($id_player){
                $sentencia = $this->db->prepare("SELECT * FROM player where id_player=?");
                $sentencia->execute(array($id_player));
                return $sentencia->fetch();
            }

            function getPlayerPositions($id_position){
                $sentencia = $this->db->prepare("SELECT * FROM player where id_position=?");
                $sentencia->execute($id_position);
                return $sentencia->fetchAll();
            }
            function insertPlayer($name,$surname,$nickname,$id_position){
                $sentencia = $this->db->prepare("INSERT INTO player(name,surname,nickname,id_position) VALUES(?,?,?,?)");
                $sentencia->execute(array($name,$surname,$nickname,$id_position));
            }

            function renamePlayer($id_player,$name,$surname,$nickname,$id_position){
                $sentencia = $this->db->prepare("UPDATE `player` SET `name` = '$name', `surname` = '$surname', `nickname` = '$nickname', `id_position` = '$id_position' WHERE `player`.`id_player` = $id_player");
                $sentencia->execute(array($name,$surname,$nickname,$id_position,$id_player));  
            }

            function deletePlayer($id_player){
                $sentencia = $this->db->prepare("DELETE FROM player WHERE id_player=?");
                $sentencia->execute(array($id_player));
            }
            function markFinished($id_player){
                $sentencia = $this->db->prepare("UPDATE player SET `edit`='1' WHERE id_player=?");
                $sentencia->execute(array($id_player));
            }
            
        

}



?>