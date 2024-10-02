<?php 

function divided($a,$b){ 
    if($b==0){ 
        return "this is an error";
    }

    return $a/$b;
} 

echo divided(10,2);
