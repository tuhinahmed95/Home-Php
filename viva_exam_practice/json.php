<?php
$json = ['name'=>'tuhin','ahmed','khan','rafia'];
$jsondata = json_encode($json);
echo $jsondata;

echo "<br/>";
$array = '{"name":"tuhin","professin":"Developer"}';
// $arradata = json_decode($array);
var_dump(json_decode($array));

?>