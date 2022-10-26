<?php
    $edad= $_POST['Edad'];
    $sexo = $_POST['Sexo'];
  
   /*  if($edad>=63 && $sexo=="Masculino"){
        echo "Jubilación = Apto";

    }elseif($edad>54 && $sexo=="Femenino"){
        echo "Jubilación = Apto";

    }else{
        echo "Jubilación = No apto";
    } */

    if($sexo=="Masculino"){
        if($edad>=63){
            echo "Jubilación = Apto";
        }else{
            echo "Jubilación = No apto";
        }
    }else{
        if($sexo=="Femenino"){
            if($edad>54){
                echo "Jubilación = Apto";
            }else{
                echo "Jubilación = No apto";
            }
        }
    }
?>