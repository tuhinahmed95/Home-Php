<?php

// $numbers = [23,45,67,78,89];

// foreach($numbers as $number){ 
//     echo $number;
// }

// function myfunction (){ 
//     foreach($numbers as $number){ 
//         echo $number;
//     }
// }

// myfunction();

$x = 0;

while($x<6){ 
    $x++;
    if($x == 3) continue;
    echo $x;
}

?>