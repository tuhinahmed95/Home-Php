<?php

$cars = ['volvo','audi','bmw'];
$cars [1] = "lambargini";
array_push($cars,"mercedis");
array_pop($cars);
array_shift($cars);
array_unshift($cars,'toyota');
print_r($cars)."<br/>";

$bikes = ['pulser','Royal Enfield','zixer','R15','Xblade'];
foreach($bikes as $bike){ 
    echo $bike. " ";
}

?>