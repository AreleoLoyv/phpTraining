<?php

$val1 = 9;
$val2 = 9;
$val3 = "9";
$val4 = 5;
$val5 = 2;

// Igualdad ==

var_dump($val1 == $val2);
echo "<br>";

var_dump($val4 == $val5);
echo "<br>";

var_dump($val1 == $val3);
echo "<br><br>";


// Identico ===

var_dump($val1 === $val2);
echo "<br>";

var_dump($val4 === $val5);
echo "<br>";

var_dump($val1 === $val3);
echo "<br><br>";

// Diferente !=

var_dump($val1 != $val2);
echo "<br>";

var_dump($val4 != $val5);
echo "<br>";

var_dump($val1 != $val3);
echo "<br><br>";

// Diferente !==

var_dump($val1 !== $val2);
echo "<br>";

var_dump($val4 !== $val5);
echo "<br>";

var_dump($val1 !== $val3);
echo "<br><br>";

// Mayor que >

var_dump($val1 > $val2);
echo "<br>";

var_dump($val4 > $val5);
echo "<br>";

var_dump($val5 > $val4);
echo "<br>";

var_dump($val1 > $val3);
echo "<br><br>";

// Menor que <

var_dump($val1 < $val2);
echo "<br>";

var_dump($val4 < $val5);
echo "<br>";

var_dump($val5 < $val4);
echo "<br>";

var_dump($val1 < $val3);
echo "<br><br>";

// Mayor o igual que >=

var_dump($val1 >= $val2);
echo "<br>";

var_dump($val4 >= $val5);
echo "<br>";

var_dump($val5 >= $val4);
echo "<br>";

var_dump($val1 >= $val3);
echo "<br><br>";

// Menor o igual que <=

var_dump($val1 <= $val2);
echo "<br>";

var_dump($val4 <= $val5);
echo "<br>";

var_dump($val5 <= $val4);
echo "<br>";

var_dump($val1 <= $val3);
echo "<br><br>";

// <=>

echo 2 <=> 1;
echo "<br>";
echo 1 <=> 1;
echo "<br>";
echo 0 <=> 1;
echo "<br><br>";

// ??

$valueNoNull = 29;

echo $valueNull ?? $valueNoNull;

?>