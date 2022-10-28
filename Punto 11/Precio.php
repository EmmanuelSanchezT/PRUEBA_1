<?php
    $Costo= $_POST['Costo'];
    $Total = $Costo + ($Costo* 0.15);

    
    echo "Valor a cobrar = ".$Total;
           
    
?>