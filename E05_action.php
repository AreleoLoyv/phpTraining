<?php

    if(isset($_REQUEST['edad']) && $_REQUEST['edad'] > 0 ){
        
        if($_REQUEST['edad'] < 5){
            echo "El estudiante con ".$_REQUEST['edad']." años tendrá sus juguetes en la parte inferior de la
            bodega.";
        }elseif($_REQUEST['edad'] < 7){
            echo "El estudiante con ".$_REQUEST['edad']." años tendrá sus juguetes en la parte media de la
            bodega.";
        }else{
            echo "El estudiante con ".$_REQUEST['edad']." años tendrá sus juguetes en la parte alta de la
            bodega.";
        }

    }else{
        echo "Por favor, ingresar un valor valido 1-99";
    }
    

?>