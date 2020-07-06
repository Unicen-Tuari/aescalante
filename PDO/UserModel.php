<?php

class UserModel{

    private $db;

            function __construct(){

                $this->db = new PDO('mysql:host=localhost;dbname=the_new_sensation; charset=utf8','root','');

            }

            function createUser($email,$password){
                $sentencia= $this->db->prepare("INSERT INTO  `user` (`mail`,`password`) VALUES (?,?)" );
                $sentencia->execute(array($email,password_hash($password, PASSWORD_DEFAULT)));
            }

            function getUser($email){
                $sentencia = $this->db->prepare("SELECT * FROM `user` where `mail` = ?");
                $sentencia->execute(array($email));
                return $sentencia->fetch();
            }
}

?>