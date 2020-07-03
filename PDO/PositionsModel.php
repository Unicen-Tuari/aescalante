<?php
class PositionsModel{ 

            private $db;

            function __construct(){

                $this->db = new PDO('mysql:host=localhost;dbname=the_new_sensation; charset=utf8','root','');

            }
            function positions($member = null){
                $positions=$this->p_model->getPositions();
                $players= $this->model->getPlayers();
                $this->view->ShowPositions($positions,$players);
              }
            function getPositions(){
                $sentencia = $this->db->prepare("SELECT * FROM position");
                $sentencia->execute();
                return $sentencia->fetchAll(PDO::FETCH_ASSOC);
            }
            function insertPosition($name){
                $sentencia = $this->db->prepare("INSERT INTO `position` (`name`) VALUES (?)");
                $sentencia->execute(array($name));
                
            }
            function deletePosition($id_position){
                $sentencia = $this->db->prepare("DELETE FROM position WHERE id_position=?");
                $sentencia->execute(array($id_position));

            }
        }
?>