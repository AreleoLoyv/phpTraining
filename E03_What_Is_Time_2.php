<?php

function wit(){
    return date('g:i a');
}


echo "J- Hola, ¿Podrias decirme la hora? \n";
echo "P- Claro, son las ".wit();


?>