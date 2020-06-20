<?php
//define('BASE_URL','//'.$_SERVER['SERVER_NAME'] .':8080' . dirname($_SERVER['PHP_SELF']).'/PDO');
 class ConfigApp{
    public static $ACTION = "action";
    public static $PARAMS = "params";
    public static $ACTIONS = [  
        'operacion' => 'calculadora',
        "add" => 'addPlayer',
        "delete"=>'removePlayer',
        'home' => 'home'
    ];
}





?>