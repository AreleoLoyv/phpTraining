<?php

    $words = array("sun","moon","sky");
    for ($i=0; $i < count($_REQUEST) ; $i++) { 
        if($words[$i] == $_REQUEST["word$i"]){
            print "<p>La palabra ".$_REQUEST["word$i"]." es Correcta</p>"; 
        }else{
            print "<p>La palabra ".$_REQUEST["word$i"]." es Incorrecta, la palabra era ".$words[$i]."</p>"; 
        }
    }

?>