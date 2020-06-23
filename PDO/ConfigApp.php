<?php
//define('BASE_URL','//'.$_SERVER['SERVER_NAME'] .':8080' . dirname($_SERVER['PHP_SELF']).'/PDO');
 class ConfigApp{
    public static $ACTION = "action";
    public static $PARAMS = "params";
    public static $ACTIONS = [  
        'operacion' => 'calculadora',
        "addPlayer" => 'addPlayer',
        "deletePlayer"=>'removePlayer',
        'home' => 'home',
        'positions'=>'position'
    ];
}





?>