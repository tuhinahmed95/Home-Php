<?php

use function Symfony\Component\String\b;

$json = ['name'=>'tuhin','ahmed','khan','rafia'];
$jsondata = json_encode($json);
echo $jsondata;

echo "<br/>";
$array = '{"name":"tuhin","professin":"Developer"}';
// $arradata = json_decode($array);
var_dump(json_decode($array));

echo "<br/>";
echo "<br/>";

$arrys = ['tomal','tuhin','toha','toukir'];
$json = json_encode($arrys);
echo $json;

echo "<br/>";
echo "<br/>";

$json = '{"name":"Tuhin","profession":"Developer","Address":"Gaibandha"}';
$array = json_decode($json);
print_r($array);

echo "<br/>";
echo "<br/>";

$js = ['tuhin','tanvir','tomal'];
$json = json_encode($js);
echo $json;


echo "<br/>";
echo "<br/>";
$arra = '{"name":"Tuhin","address":"Gaibandha","Status":"Single"}';
$arrays = json_decode($arra);
print_r($arrays);

echo "<br/>";
echo "<br/>";

$jsons = '{"name":"Tuhin","profession":"Developer","Company":"Danpite"}';
$array = json_decode($json);
print_r($array);

echo "<br/>";
echo "<br/>";

$array = ['tuhin','ahmed','kabir','khan'];
$json = json_encode($array);
echo $json;

echo "<br/>";
echo "<br/>";

$multiD = [
    ['name'=>'tuhin','profession'=>'Developer'],
    ['address'=>'gaibandha','status'=>'single'],
    ['education'=>'masters','university'=>'national University']
];

for($x = 0; $x <ul count($multiD) ; $x ++){ 
    echo "<p><b>Row Number $x </b> </p>";
    echo "<ul>";
    foreach($multiD[$x] as $key=>$value){ 
        echo "<li>$key : $value</li>";
    }
    echo "</ul>";
}



?>