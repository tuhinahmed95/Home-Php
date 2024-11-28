<?php
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




?>