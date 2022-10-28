<?php
    $nombre= $_POST['Aprendiz'];
    $asignatura = $_POST['Asignatura'];
    $n1= $_POST['N1'];
    $n2 = $_POST['N2'];
    $n3 = $_POST['N3'];

    $n4= $n1 * 0.30;
    $n5 = $n2 * 0.30;
    $n6 = $n3 * 0.40;

    $NotaFinal = $n4 + $n5 + $n6;

    if($NotaFinal >= 4.0){
            echo "Aprendiz = ".$nombre;
            echo "";
            echo "Asignatura = ".$asignatura;
            echo "";
            echo "Nota Definitiva = ".$NotaFinal." - APROBADO";
        }else{
            echo "Aprendiz = ".$nombre;
            echo "";
            echo "Asignatura = ".$asignatura;
            echo "";
            echo "Nota Definitiva = ".$NotaFinal." - DESAPROBADO";
        }
    
?>