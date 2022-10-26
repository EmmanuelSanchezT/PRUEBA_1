<?php
    $nombre= $_POST['NA'];
    $AOD = $_POST['C'];
    

    if($AOD<7){
        echo " Aprendiz = ".$nombre;
        echo "<br>";
        echo " Nota = DESAPROBADO ";

    }else{
        echo " Aprendiz = ".$nombre;
        echo "<br>";
        echo " Nota = ".$AOD." - APROBADO ";
    }

?>