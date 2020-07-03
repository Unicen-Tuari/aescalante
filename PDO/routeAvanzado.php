<?php
require_once "ConfigApp.php";
//require_once "panel_control.php";
require_once "NewView.php";
require_once "NewModel.php";
require_once "NewController.php";
require_once "PositionsController.php";
require_once "UserController.php";

//require_once "operandos.php";
//require_once "about.php";

function parteURL($url){
    
    $partes_url=explode("/",$url);

    $arrayReturn[ConfigApp::$ACTION]=$partes_url[0];
    $arrayReturn[ConfigApp::$PARAMS]= isset($partes_url[1]) ? array_slice($partes_url, 1) : null;

    return $arrayReturn;

}

$url_data = parteURL($_GET[ConfigApp::$ACTION]);

$actionName=$url_data[ConfigApp::$ACTION];

if(array_key_exists($actionName, ConfigApp::$ACTIONS)){

    $params = $url_data[ConfigApp::$PARAMS];

    $controllerMetodo = explode('#', ConfigApp::$ACTIONS[$actionName]);
    $controller= new $controllerMetodo[0];
    $methodName = $controllerMetodo[1];

    //$methodName = ConfigApp::$ACTIONS[$actionName];

    if(isset($params) && $params != null){
       
        echo $controller->$methodName($params);

    }else{

        echo $controller->$methodName();
    }

}else{

    header("Location: ../index");
}



?>