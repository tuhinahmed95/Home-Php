<?php

// $array = [ 3, 26, 1, 2, 3, 44, 57, 87, 1 ];

function fix_arry($array){ 

    $unique_arry = array_unique($array);
    sort($unique_arry);

    return $unique_arry;
}

echo fix_arry($unique_arry);