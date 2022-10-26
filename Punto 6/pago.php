<?php
    $num1 = $_POST['V'];
    $num2 = $_POST['TP'];
    $num3 = $_POST['P'];

    $precioP = 5000;
    $precioTP =  500;
    $precioV = 2000;
    
    $multi1 = $num1 * $precioV;
    $multi2 = $num2 * $precioTP;
    $multi3 = $num3 * $precioP;

   $suma = $multi1 + $multi2 + $multi3;

    echo "° Precio de los Volantes = ".$multi1." ° Precio de las Tarjetas de Presentación = ".$multi2." ° Precio de los Posters = ".$multi3." ° Precio Total = ".$suma;
?>