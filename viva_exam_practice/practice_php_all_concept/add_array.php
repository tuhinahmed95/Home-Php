<?php

$arrays = ['volvo','toyota','bmw'];
// $arrays [] = 'Lambergint';
unset($arrays[0],$arrays[2]);
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
echo "<br/>";

$color = ['first'=>'red','second'=>'green','third'=>'yello','four'=>'blue'];
$newarray = array_diff($color,['red','green','yello']);
print_r($newarray);
echo "<br/>";

$numbers = [2,5,8,9,70];
rsort($numbers);
$arrylengt = count($numbers);
for($x=0;$x<$arrylengt;$x++){ 
    echo $numbers[$x]."<br/>";
}

echo "<br/>";

$strings = ['first'=>"number","second"=>"number-9","third"=>"number-2"];
krsort($strings);
foreach($strings as $key => $string){ 
    echo "Key = ".$key. "Value = ".$string."<br/>";
}

echo "<br>";

$numbers = array(2,5,8,1,6,9);
rsort($numbers);
$arraylength = count($numbers);
for($x = 0; $x < $arraylength; $x++){ 
    echo $numbers[$x]."<br/>";
}

echo "<br/>";

$strings = array('name'=>'Audi','model'=>'monaco45','color'=>"red",'price'=>456788);
krsort($strings);
foreach($strings as $key => $string){ 
    echo "Key = " . $key . "Value = ".$string. "<br/>";
}

echo "<br/>";

$cars = [
    ['volvo',22,18],
    ['toyota',34,23],
    ['bmw',15,9]
];

for($row = 0; $row < 3; $row++){ 
    echo "<p>Number Of Row = $row</p>";
    echo "<ul>";
    for($col = 0; $col < 3; $col++){ 
        echo "<li>".$cars[$row][$col]."<li/>";
    }
    echo "<ul/>";
}

echo "<br/>";

$x = 100;

echo $GLOBALS['x'];
echo $x;

echo "<br/>";

echo $_SERVER['HTTP_HOST'];
?>