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
echo "<br/>";

function HelloFunction($num1, $num2,$num3 = 30){ 
    echo $num1 + $num2 * $num3;

}
HelloFunction(5,5);


echo "<br/>";
echo "<br/>";

$array = [
    ['tuhin','ahmed'],
    ['abir','islam'],
    ['ripon','mondol'],
    ['chanchal','bsswas']
];
foreach($array as $row=>$value){ 
    echo "Row Number $row"."<br/>";
    foreach($value as $data){ 
        echo $data." ";
    }

}

echo "<br/>";
echo "<br/>";

function callback($item){ 
    return strlen($item);
}
$call = ['hello','world','how','are','you'];
$back = array_map("callback",$call);
print_r($back);
echo "<br/>";
echo "<br/>";

$arrays = ['tuhin','ahmed','khan','kabir','shakil','mondol'];
rsort($arrays);
print_r($arrays);

echo "<br/>";
echo "<br/>";

$user = 'john';
$userName = "Tuhin Ahmed";
setcookie($user,$userName, time()+ (36000*30),"/");
if(!isset($_COOKIE[$user])){ 
    echo "User Is Not". $user . " Set ";
}else{ 
    echo "Cookie User Is ". $user. " Set "."<br/>";
    echo "Cookie Name Is ". $_COOKIE[$user]. " Set ";
}

echo "<br/>";
echo "<br/>";






?>