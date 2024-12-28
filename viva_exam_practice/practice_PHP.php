<?php

function CallBack($item){ 
    return strlen($item);
}

$array = ['banana','mango','pineapple','orragne'];

$new = array_map("CallBack",$array);
print_r($new);

echo "<br/>";
echo "<br/>";

$number = 45.678;
$n =( is_float($number));
var_dump($n);
?>