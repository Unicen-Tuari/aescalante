<?php
function calculadora($arr_op){
   $operation = $arr_op[0];
   $a = $arr_op[1];
   $b = $arr_op[2];
        if($operation=='dividir'){

            $resultado=division($a,$b);   

        }elseif($operation=='sumar'){

            $resultado=sumar($a,$b);

        }elseif($operation=='restar'){

            $resultado = restar($a,$b);
        }
   return $resultado;         
}

function division($a,$b){
   return $resul = "La operacion de $a dividido $b es => " . ($a/$b);
}

function sumar($a,$b){
   return $resul = "La suma de $a y $b es => " . ($a+$b);
}

function restar($a,$b){
   return $resul = "La resta de $a y $b es => " . ($a-$b);
}

//echo calculator($_GET['operation'],$_GET['a'],$_GET['b']);


?>