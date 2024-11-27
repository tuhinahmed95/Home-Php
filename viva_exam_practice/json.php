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

?>