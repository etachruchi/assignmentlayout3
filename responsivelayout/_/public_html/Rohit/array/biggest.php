<?php
    $arr = array(
        array(12, 23, 1, 27, 35,44,74,97),
        array(54, 87, 61, 99, 14),
        array(25, 65, 78, 98, 13),
        array(11, 76, 96, 45, 133, 145, 198, 237, 285)
    );
    $large = 0;
    foreach($arr as $a){
        foreach($a as $b){
            if($b > $large){
                $large = $b;
            }
        }
    }
    echo $large;
?>