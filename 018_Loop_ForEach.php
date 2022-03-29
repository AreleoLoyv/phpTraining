<?php

$coffes = array(
    "Capuccino" => 5,
    "Latte" => 4,
    "Americano" => 7,
    "Mocca" => 10
);

foreach ($coffes as $coffe => $price) {
    echo "El café $coffe cuesta $$price USD \n";
}

echo "\n";

// BREAK

foreach ($coffes as $coffe => $price) {
    echo "Buscando café Americano, econtramos el café $coffe \n";
    if($coffe == "Americano"){
        echo "Aquí está el café Americano!";
        break;
    }
}

// CONTINUE

foreach ($coffes as $coffe => $price) {
    if($coffe == "Americano")
        continue;
    echo "El café $coffe cuesta $$price USD \n";
}

?>