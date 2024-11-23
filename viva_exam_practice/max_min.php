<?php
$numbers = [3,7,8,9];
echo (max($numbers));
echo "<br/>";
echo (min($numbers));

echo "<br/>";

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

?>