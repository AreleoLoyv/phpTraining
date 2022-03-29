<?php

// Simple function 

function say_good_bye(){
    echo "Good Bye \n";
}

say_good_bye();

// Function con Parámetros

function operation($operation,$n1,$n2){

    switch ($operation
    ) {
        case 'suma':
            echo "la suma de $n1 y $n2 es ".($n1+$n2)."\n";
            break;
        case 'resta':
            echo "la resta de $n1 y $n2 es ".($n1-$n2)."\n";
            break;
        case 'multi': 
            echo "la multiplicación de $n1 y $n2 es ".($n1*$n2)."\n";
            break;
        case 'divi': 
            echo "la división de $n1 entre $n2 es ".($n1/$n2)."\n";
            break;
        default:
            echo "Operación no valida \n";
            break;
    }

}

$parametro1 = readline("¿Que operaión matemática dseas hacer? \n");
$parametro2 = (int) readline("¿Cual es el número al que deseas hacer la operación? \n");
$parametro3 = (int) readline("¿Con que otro número hacer la operación? \n");

operation($parametro1,$parametro2,$parametro3);

// Funciones con parametros por defecto

function suma($a=1,$b=1){
    echo "La suma de $a + $b es: ". ($a + $b) . "\n";
}

suma(5);

// usar arreglo con funcion
$array1 = [3,4];

suma(...$array1);

// recibir varios argumentos en una función

function suma_eterna(...$arg){
    $sum = 0;

    foreach ($arg as $n) {
        $sum += $n;
    }

    echo "La suma total es de : $sum \n";
}

suma_eterna(1,2);
suma_eterna(1,2,3,4,5);
suma_eterna(12,23,34,45,56,67,78,89,90);

// funciones con Return 

function retornar(){
    return rand(1,10);
}

echo retornar();

?>