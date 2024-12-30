<?php 

$array = [45,23,78,90,5,0];
$lent = count($array);
for($x = 0; $x < $lent; $x++){ 
    if($array[$x] == 90)continue;
    echo $array[$x]." ";
}
?>