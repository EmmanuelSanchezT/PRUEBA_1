<?php
    $num1 = $_POST['H1'];
    $num2 = $_POST['H2'];
    
    $resta1 = $num2 - $num1;
    $resta2 = $num1 - $num2;

    if($num1<$num2){
        echo " El hermano mayor tiene ".$num2." años ";
        echo "<br>";
        echo " Diferencia de edad = ".$resta1;

    }else{
        echo " El hermano mayor tiene ".$num1." años ";
        echo "<br>";
        echo " Diferencia de edad = ".$resta2;
    }

?>