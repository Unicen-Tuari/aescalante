<?php

require_once "operandos.php";

$action = $_GET['action'];
//print "action " . $_GET['action'];


$url=explode("/",$action);

    if($url[0]==''){

        print "NO EXISTE URL";

    }elseif($url[0] == 'pi'){
        
        print pi();

    }elseif($url[0] == 'operando'){
                    $operacion=$url[1];

                    $a=$url[2];
                    
                    $b=$url[3];
            print calculator($operacion,$a,$b);
    }

?>