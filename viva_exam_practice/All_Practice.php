<?php
// practice castig
$string = "php_casting practice";
$int = (int)$string;
echo $int;
// var_dump($int);
echo "<br/>";
echo "<br/>";

$arrays = ['tuhin','aryan','salman','amir'];
// $str = (string)$arrays;
$strr = implode(" ,", $arrays);
echo $strr;
echo "<br/>";
echo "<br/>";

$str = "tuhin Ahmed Gaibandha";
$array = (array)$str;
print_r($array);
echo "<br/>";
$bol = true;
$ar = (array)$bol;
print_r($ar);
echo "<br/>";
echo (pi());
echo "<br/>";
$math = [34,56,2,78,34,78];
echo (max($math));
echo "<br/>";
echo (abs(-7.8));
echo "<br/>";
$n = 64;
echo (sqrt($n));
echo "<br/>";
echo (rand(1,9));
echo "<br/>";
echo (round(5.4));
echo "<br/>";

define('name','values');
echo name;
echo "<br/>";

define('cars',[
    'BMW','Volvo','Mercidies'
]);
echo cars[2];

echo "<br/>";

$string = '{"name":"Tuhin","Profession":"Developer","Address":"Gaibandha"}';
$arry = json_decode($string);
print_r($arry);
echo "<br/>";
$arr = ['tuhin','ahmed','hello','world'];
$json = json_encode($arr);
echo $json;
echo "<br/>";

function CalBack($item){ 
    return strlen($item);
}

$ary = ['tuhin','ahmed','tasrif'];
$str = array_map("CalBack",$arr);
print_r($str);
echo "<br/>";

$tuna = ['tanvir','aslam','mister','coconut'];
$str = array_map(function($item){return strlen($item);},$tuna);
print_r($str);

echo "<br/>";
function MyFunction($items){ 
    return strlen($items);
}

$a = ['fruits','coconut','orrange','apple'];
$lent = array_map("MyFunction",$a);
print_r($lent);

echo "<br/>";
echo "<br/>";

$names = "User";
$value = "Cokkie_Vlaue_Ales";

setcookie($names,$value, time()+ 86400*30 , "/");

if(!isset($_COOKIE[$names])){ 
    echo "Cokkies Name ". $names . " Is Not Set ". "<br/>";
}else { 
    echo "Cokkie Name " . $names . " Is Set"."<br/>";
    echo "Cokkie Value " . $_COOKIE[$names];
}

echo "<br/>";
echo "<br/>";

$newAray = ['bmw','volvo','toyota','x-corola'];
array_unshift($newAray,'Lambergini');
print_r($newAray);
echo "<br/>";
echo "<br/>";

$assA = array("name"=>"Tuhin","profession"=>"developer","position"=>"junior","company name"=>"logic software lt");



?>