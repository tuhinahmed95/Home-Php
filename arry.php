<?php


function fix_array($arr) {
    
    $unique_arr = array_unique($arr);
    
   
    sort($unique_arr);
    
    
    return $unique_arr;
}

$arr = [ 3, 26, 1, 2, 3, 44, 57, 87, 1 ];
$fixed_arr = fix_array($arr);
print_r($fixed_arr); 


