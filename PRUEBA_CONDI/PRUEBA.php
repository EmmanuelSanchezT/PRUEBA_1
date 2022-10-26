<?php
$N1 = $_POST['N1']; 
$N2 = $_POST['N2'];
$N3 = $_POST['N3'];


if($N1>$N3){
    if($N1>$N3){
        echo $N1." es mayor que ".$N2." y ".$N3;
    }else{
        echo $N3." es mayor que ".$N1." y ".$N2;
    }
    }else{
       if($N2>$N3){
       echo $N2." es mayor que ".$N1." y ".$N3;
    }else{
        echo $N3." es mayor que ".$N1." y ".$N2;
    }
}


?> 