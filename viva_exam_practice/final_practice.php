<?php 

$names = "Tuhin Ahmed";
// echo strlen($names)."<br>";
echo str_replace('Ahmed','khan',$names)."<br>";
// echo str_word_count($names);
echo "<br/>";
echo "<br/>";

$n = " Abir Mondol";
echo trim($n);
echo "<br/>";
echo "<br/>";
$na = "Tuhin Ahmed";
echo substr($na, 3);
echo "<br/>";

$test = "Hello World \"how are you\"";
echo $test;

echo "<br/>";
echo "<br/>";
$test2 = "hellow world \$name";
echo $test2;
echo "<br/>";
echo "<br/>";

$t = "hellow \rWorld";
echo $t;
echo "<br/>";
$num = 'tuhin';
$string = (int)$num;
echo $string;
echo "<br/>";
echo "<br/>";
$numbers = [12,34,56,89,99];
print_r(max($numbers));




?>