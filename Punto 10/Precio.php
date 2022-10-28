<?php
    $Precio= $_POST['Precio'];
    $Total = $Precio - ($Precio * 0.2)  ;

    if($Precio >= 20000){
            echo "Valor a pagar = ".$Total;
           
        }else{
            echo "Valor a pagar = ".$Precio;  
        }
    
?>