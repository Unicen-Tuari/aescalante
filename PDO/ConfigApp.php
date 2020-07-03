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
        'index' => 'NewController#index',
        'players' => 'NewController#players',
        'statistics' => 'NewController#statistics',
        'positions'=>'PositionsController#positions',
        'marckedPlayer'=>'NewController#marckedPlayer',
        'login'=>'UserController#login',
        ''=>'NewController#index'
    ];
}





?>