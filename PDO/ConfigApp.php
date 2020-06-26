<?php
define('BASE_URL','//'.$_SERVER['SERVER_NAME'] .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/');
 class ConfigApp{
    public static $ACTION = "action";
    public static $PARAMS = "params";
    public static $ACTIONS = [  
        "addPlayer" => 'addPlayer',
        'addPosition' => 'addPosition',
        "deletePlayer"=>'removePlayer',
        "deletePosition"=>'removePosition',
        'home' => 'home',
        'positions'=>'positions'
    ];
}





?>