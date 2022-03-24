<?php

// Asociatividad a la Izquierda

$value_true = true;
$value_false = false;

echo "<br>";
$value = $value_true and $value_false;
var_dump($value);
/* Da False por:  

$value = $value_true and $value_false;
--------------------

el AND se ejecutará con lo que esté Primero a la Izquierda 
luego de estar resuelto lo de la Izquierda se ejecutara el AND
con lo de la Derecha.
si quiero ver el resultado que esperaba, uso parentesis 

*/
echo "<br>";
$value = ($value_true and $value_false);
var_dump($value);
echo "<br>";

// Asociatividad a la Derecha

$c= 1;

$a = $b = $c;
echo "<br>";
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";

/*
Aquí es el caso contrario
Primero se ejecuta lo que está a la Derecha ( Del simbolo "=" )
y luego se asigna el valor a la variable que está a la Izquierda
*/

?>