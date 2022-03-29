<?php

    $list = [1,54,5,2,8,45,23,8789,23,57,22,192,665,6934,324,645,2341,79,56,343];

    usort($list, function($a,$b){
        return $a <=> $b;
    });

    var_dump( $list );
    
?>