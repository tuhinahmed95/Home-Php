<?php

$array = 'tuhin ahmed md';

$y = explode(" ", $array);
print_r($y);
echo "<br/>";

$str = ['green','orrange','red'];
echo implode(' ', $str);
echo "<br/>";

$string = array("tuhin",'Ahmed','Khan','Rafia');
$converts_string = implode(" ", $string);
echo $converts_string;
echo "<br/>";
$array = "tuhin ahmed khan rafia";
$converts_array = explode(" ", $array);
$arrlentht = count($converts_array);
// print_r($converts_array);
// foreach($converts_array as $arry){ 
//     echo "Returns = ". $arry ." ";
// }

// for($x = 0; $x < $arrlentht; $x++){ 
//     echo $array[$x];
// }

$arrays = ['Tuhin',"Rafia",'Mia','Khan'];
// $lentht = count($arrays);
// for($i = 0; $i < $lentht; $i++){ 
//     echo $arrays[$i]." ";
// }

foreach($arrays as $array){ 
    if($array == 'Mia')continue;
    echo $array;
}

?>