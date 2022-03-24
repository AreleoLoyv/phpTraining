<?php

    $value_true = true;
    $value_false = false;

    // Operador Logico OR ||

    var_dump($value_true || $value_true);
    echo "<br>";

    var_dump($value_true || $value_false);
    echo "<br>";

    var_dump($value_false || $value_false);
    echo "<br>";

    // Operador Logico AND &&
    echo "<br>";
    var_dump($value_true && $value_true);
    echo "<br>";

    var_dump($value_true && $value_false);
    echo "<br>";

    var_dump($value_false && $value_false);
    echo "<br>";

    // AND y OR literal
    echo "<br>";
    $value = $value_true and $value_false;
    var_dump($value);
    echo "<br>";

?>