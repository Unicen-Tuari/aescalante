<?php
define('BASE_URL','//'.$_SERVER['SERVER_NAME'] .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/');
 class ConfigApp{
    public static $ACTION = "action";
    public static $PARAMS = "params";
    public static $ACTIONS = [  
        "addPlayer" => 'NewController#addPlayer',
        "editPlayer" => 'NewController#editPlayer',
        "editFinish" => 'NewController#editFinish',
        'addPosition' => 'PositionsController#addPosition',
        "deletePlayer"=>'NewController#removePlayer',
        "deletePosition"=>'PositionsController#removePosition',
        'home' => 'NewController#Home',
        'index' => 'vistaUsuarioController#index',
        'players' => 'vistaUsuarioController#players',
        'statistics' => 'vistaUsuarioController#statistics',
        'positions'=>'PositionsController#positions',
        'marckedPlayer'=>'NewController#marckedPlayer',
        'login'=>'UserController#login',
        'access'=>'UserController#toAccess',
        'registry'=>'UserController#signIn',
        'createUser'=>'UserController#create',
        'logAut'=>'UserController#logAut'
    ];
}





?>