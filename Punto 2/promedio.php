<?php
    $num1 = $_POST['Nota1'];
    $num2 = $_POST['Nota2'];
    $num3 = $_POST['Nota3'];

    $nombre = $_POST['Estudiante'];
    $asignatura = $_POST['Asignatura'];

    $suma = ($num1 + $num2 + $num3) / 3;
    echo "Nombre = ".$nombre." Asignatura = ".$asignatura." Promedio = ".$suma;
?>