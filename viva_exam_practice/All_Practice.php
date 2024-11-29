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
?>