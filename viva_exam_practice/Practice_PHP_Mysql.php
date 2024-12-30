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
    ['hello','world'],
    ['hello','world,How are you'],
];

// $lents = count($multi);

// for($row = 0; $row < count($multi); $row ++){ 
//     echo "Row Number $row <br/>";
//     echo "<ul>";
//     for($col = 0; $col < count($multi[$row]); $col++){ 
//         echo "<li>". $multi[$row][$col]  ."</li>";
//     }
//     echo "</ul>";
// }

// for($row = 0; $row < $lents; $row++){ 
//     echo "Row Number $row <br/>";
//     echo "<ul>";
//     foreach($multi [$row] as $m){ 
//         echo "<li>".$m ."</li>";
//     }
//     echo "</ul>";
// }

foreach ($multi as $rowIndex =>$row){ 
    echo "Row Number $rowIndex";
    echo "<ul>";
    foreach($row as $value){ 
        echo "<li>".$value."</li>";
    }
    echo "</ul>";
}

?>