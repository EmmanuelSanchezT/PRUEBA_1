<?php
    $num1 = $_POST['PG'];
    $num2 = $_POST['PP'];
    $num3 = $_POST['PE'];

    $num11 = 3;
    $num22 = 0;
    $num33 = 1;

    $pganados = $num1 * $num11;
    $pperdidos = $num2 * $num22;
    $pempatados = $num3 * $num33;


    echo "Puntos totales = ". $pganados + $pperdidos + $pempatados;
?>