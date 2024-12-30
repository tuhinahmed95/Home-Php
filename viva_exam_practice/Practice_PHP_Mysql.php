<?php 

$array = [45,23,78,90,5,0];
// $lent = count($array);
// for($x = 0; $x < $lent; $x++){ 
//     if($array[$x] == 90)continue;
//     echo $array[$x]." ";
// }

foreach($array as $arr){ 
    if($arr == 0)continue;
    echo $arr . " ";
}
echo "<br/>";
echo "<br/>";

$arrays = ['tuhin','ahmed','khan','kabir'];
array_splice($arrays,0,3);
print_r($arrays);

echo "<br/>";
echo "<br/>";

$multi = [
    ['hey','tuhin'],
    ['hi','abir'],
    ['hello','world']
];

for($row = 0; $row < 3; $row ++){ 
    echo "Row Number $row <br/>";
    echo "<ul>";
    foreach()
}

?>