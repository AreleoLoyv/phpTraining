<?php

$words = array("sun","moon","sky");
$scramble = array();

for ($i=0; $i < count($words) ; $i++) { 
    $scramble[$i] = str_shuffle($words[$i]);
}



echo "<h1>Adivina la palabra</h1><form action='E06_scramble_answer.php'>";

for ($i = 0; $i < count($words); $i++) { 
    echo "<p>".$scramble[$i]."</p><input type='text' name='word".$i."'></br>";
}

echo "<button type='submit'>Send</button></form>";

?>