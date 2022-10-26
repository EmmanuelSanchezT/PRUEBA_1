<?php
$n1 = 50;
$n2 = 20;


/* operadores de comparación

== igualdad
> mayor que
>= mayor o igual que
< menor que
<= menor o igual que

&& operador y
or operador o 

if(){
    codigo que resuelve si la respuesta a la pregunta es positiva 
}else{
    if(){

    }
}


*/

if($n1==$n2){
   echo "ambos valores son iguales";
}else{
    if($n1>$n2){
        echo $n1."es mayor que".$n2;
    }else{
        if($n1<$n2){
            echo $n1." no es mayor que ".$n2;
        }
    }
    
}
?>