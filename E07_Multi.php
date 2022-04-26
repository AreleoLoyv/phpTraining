<?php

function discount($price,$percentage){
    /*
        precio          X 
        ------  =   ---------
          100       descuento 
    
    
          precio x (descuento x 100) = X

    */
    return round( ($price*$percentage)/100 );
}

$p = readline("Ingrese el precio base \n");
$d = readline("Ingrese el descuento deseado 0-100 \n");

print "El $d% de descuento de $ $p es de $ ". discount($p,$d);



?>