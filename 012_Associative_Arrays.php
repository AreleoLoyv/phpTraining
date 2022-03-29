<?php

$years = array(
    "Mark" => 20,
    "Luis" => 15,
    "Juan" => 25
);

echo "La dead de Luis es ".$years["Luis"]."\n";

$coffes = array(
    "Capuccino" => 5,
    "Latte" => 4,
    "Americano" => 7
);

echo "El precio del café Americano es de {$coffes['Americano']} \n";

$people = array(

    "Juan" => array(
        "edad" => 25,
        "apellido" => "Lopez"
    ),

    "Jose" => array(
        "edad" => 30,
        "apellido" => "Ochoa"
    ),

);

echo "\n la edad de Juan es : ".$people["Juan"]["edad"];
echo "\n y su apellido es : ".$people["Juan"]["apellido"];

?>