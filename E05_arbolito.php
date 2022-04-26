<?php


    if(isset( $_REQUEST['size']) &&  $_REQUEST['size'] > 0){

        for ($i=1; $i < $_REQUEST['size']; $i++) { 
            print(str_repeat("*",$i)."</br>");
        }

    }
   

?>