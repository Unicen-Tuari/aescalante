<?php
define('BASE_URL','//'.$_SERVER['SERVER_NAME'] .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/');
 class ConfigApp{
    public static $ACTION = "action";
    public static $PARAMS = "params";
    public static $ACTIONS = [  
        "addPlayer" => 'NewController#addPlayer',
        "editPlayer" => 'NewController#editPlayer',
        "editFinish" => 'NewController#editFinish',
        'addPosition' => 'NewController#addPosition',
        "deletePlayer"=>'NewController#removePlayer',
        "deletePosition"=>'NewController#removePosition',
        'home' => 'NewController#home',
        'positions'=>'NewController#positions'
    ];
}





?>