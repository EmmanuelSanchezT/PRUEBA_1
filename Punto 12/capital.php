<?php
    $Capital= $_POST['capital'];
    $primero = $Capital + ($Capital * 0.02);
    $segundo = $Capital + ($Capital * 0.07);
    $tercero = $Capital + ($Capital * 0.045);

    if($Capital< 500){
            echo "Capital Ingresado= ".$Capital." "."Total del Capital= ".$primero;
        }elseif($Capital >= 500 && $Capital < 1500){
            echo "Capital Ingresado= ".$Capital." "."Total del Capital= ".$segundo;

    }if($Capital >= 1500){     
            echo "Capital Ingresado= ".$Capital." "."Total del Capital= ".$tercero;
    }
?>