<?php
require_once 'templateEngine\libs\Smarty.class.php';


class UserView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty;
    }
    function Showlogin(){
        $this->smarty->display('templateEngine/templates/login.tpl');
      }
    function ShowSignIn(){
        $this->smarty->display('templateEngine/templates/signin.tpl');
      }
    function ShowRegistry(){
        $this->smarty->display('templateEngine/templates/login.tpl');
      }

}
?>