<?php

    $years = [15,18,21,25,28];

    // Contar
    echo count($years)."\n";

    // Agregar al Final
    array_push($years, 30);
    var_dump($years); 

    echo "\n";

    // Confirmar si es un arreglo o no

    $noArray = "No Array";
    $Array = [1,2,3,4,5];

    echo "Is Array \n";
    var_dump( is_array( $noArray ) );
    var_dump( is_array( $Array ) );
    echo "\n";

    // Convertir STRING a ARRAY

    $list = "1,2,3,4,5";
    $listArry = explode( "," , $list );
    var_dump($listArry);
    echo "\n";

    // Convertir ARRAY a STRING

    $list = [1,2,3,4,5];
    $listArry = implode( "," , $list );
    var_dump($listArry);
    echo "\n";

    // Dividir un array en muchos arrays

    $array = array_chunk( array(1,2,3,4,5) , 2 );
    var_dump( $array );
    echo "\n";
    // el tercer parametro hace que el indice siga y no se reinicie cuando se divide
    $array = array_chunk( array(1,2,3,4,5) , 2 , 1);
    var_dump( $array );
    echo "\n";


    /* 
    Devolver valores de "una sola columna"
    */

    $logs = array(
        array(
            'id' => 2135,
            'nombre' => 'John',
            'apellido' => 'Doe',
        ),
        array(
            'id' => 3245,
            'nombre' => 'Sally',
            'apellido' => 'Smith',
        ),
        array(
            'id' => 5342,
            'nombre' => 'Jane',
            'apellido' => 'Jones',
        ),
        array(
            'id' => 5623,
            'nombre' => 'Peter',
            'apellido' => 'Doe',
        )
    );

    $onlyName = array_column($logs, 'nombre');
    var_dump($onlyName);

    // Para más funciones o consultar dudas 
    // visitar: https://www.php.net/manual/es/ref.array.php

?>