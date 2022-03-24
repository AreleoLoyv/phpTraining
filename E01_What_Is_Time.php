<?php

$hours = readline("Ingresa un número de Horas: ");
$minutes = readline("Ingresa un número de Minutos: ");
$seconds = readline("Ingresa un número de Segundos: ");

$seconds += $minutes * 60 + $hours * 3600;

echo "Hay exactamente $seconds \n";
echo "en $hours Horas y $minutes Minutos";

?>