<?php

$studens = array(

    "Juan"=> array(
        "apellido" => "Lopez",
        "edad" => 15,
        "comida" => array(
            "favorita" => "pastel",
            "no_favorita" => "trigo"
        )
    ),
    "Luis"=> array(
        "apellido" => "Ra",
        "edad" => 20,
        "comida" => [
            "favorita" => "gelatina",
            "no_favorita" => "brócoli"
        ]
    ),
    "Pablo"=> [
        "apellido" => "Moreno",
        "edad" => 25,
        "comida" => [
            "favorita" => "donas",
            "no_favorita" => "col china"
        ]
    ]

);

var_dump($studens);

echo "Las comidas que se deben evitar son ". implode( "," , array_column( array_column( $studens, 'comida'), 'no_favorita') );

?>