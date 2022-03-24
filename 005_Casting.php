<?php 

// String a Int

$number = "5";

var_dump($number);

echo "<br>";

$number = (int) $number;

var_dump($number);

echo "<br>";

// Int a Boolean

$integer = 1;

$integer = (bool) $integer;

var_dump( $integer );

echo "<br>";

$integer = 0;

$integer = (bool) $integer;

var_dump( $integer );

?>