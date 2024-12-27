<?php
$arrays = ['Tuhin','Ahmed','Rafia','Kabir','Khan'];
rsort($arrays);
foreach($arrays as $array){ 
    echo $array."<br/>";
}
echo $arrays[0];
// var_dump($arrays);
echo "<br/>";

$strings = array("name"=>"Tuhin",'Profession'=>"Developer","Address"=>"Gaibandha","Email"=>"mtuhinahmed95@gmail.com");
krsort($strings);
foreach($strings as $key=>$string){ 
    echo "Key = ".$key. "Values =".$string. "<br/>";
}
echo "<br/>";

$a = 34;
$b = 3.5;
$type = (string)$b;
var_dump($type);
echo "<br/>";
echo(pi());
echo "<br/>";
$first = 64;
echo (sqrt($first));
echo "<br/>";

echo(rand(10,100));
echo "<br/>";
echo(round(8.89));
echo "<br/>";
$tuhin = [1,3,4,6,7,10];
$lenght = count($tuhin);
for($x =1 ; $x < $lenght ; $x++){ 
    if($x ==7)continue;
    echo $tuhin[$x];
}

echo "<br/>";

$rafia = [
    ["name"=>"tuhin","profession"=>"developer"],
    ["first"=>"Rafia","profession"=>"webdeveloper developer"],
];

foreach($rafia as $key=>$rafi){ 
    echo $rafia [$key][$rafi];
}

?>