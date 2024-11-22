<?php

$arrays = ['volvo','toyota','bmw'];
$arrays [] = 'Lambergint';
// array_unshift($arrays,'Honey');
// array_splice($arrays,1,2);
// unset($arrays[1]);
// $arrays[0] = 'Kawasaki';
// array_splice($arrays,1,2);
print_r($arrays);
// var_dump($arrays);

echo "<br/>";

$cars = ['NUMBER-1'=>'BMW','NUMBER-2'=>'AUDI','NUMBER-3'=>'TOYOTA','NUMBER-4'=>'MERCEDIES'];
print_r($cars);
var_dump($cars);

echo "<br/>";

function myfunction(){ 
    echo "I come from Function";
}

// $array = ['tuhin','ahmed',myfunction()];
// $array [2]();
// echo "<br/>";

// function Mfunction(){ 
//     echo "This Is A function";
// }

$cars = ['name'=>'Audi','color'=>'red','price'=>35999];
// array_push($cars,'brnd','higclass');
// array_unshift($cars,'first','Brand');
// array_shift($cars);
// $cars ['name'] = 'Lambergini';
//  $cars ['message'];
// echo $cars['name'];
// print_r($cars['name']);
// $cars ['year'] = 1990;
// array_push($cars,'collor','reeed','modeeell','tuhhhin');
$cars += ['modeel'=>'56tyyy','colorrrr'=>'green'];
print_r($cars);

?>