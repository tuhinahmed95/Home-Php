<?php

// define('first',60,true);
// $sum = first + 30;
// echo " Sum = " . $sum;

// define('first',40,true);
// echo first;

// $x = 30;
// $y = "30";
// if($x===$y){ 
//     echo 'Correct';
// }echo 'not correct';

// $marks = 0;

// if($marks>=80 && $marks<=100){ 
//     echo 'Your Are In A Merit';
// }elseif($marks>=70 && $marks<=79){ 
//     echo 'Your Are In A ';
// }elseif($marks>=60 && $marks<=69){ 
//     echo 'Your Are In A B';
// }else{ 
//     echo "Please Enter Valid number";
// }

// $a = 0;
// while($a<20){ 
//     echo "Tuhin.<br/>";
//     $a++;
// }

// $number = 1;
// do{ 
//     echo 'tentime.<br/>';
//     $number++;

// }while($number<=10);

// for($x=1; $x<=100; $x=$x+10){ 
//     for($b = $x; $b < $x +10; $b++){ 
//         echo $b. " ";
//     }
//     echo "<br/>";
// }

// $x =1;

// do{ 
//     echo $x."<br/>";
//     $x++;
   
// }while($x<=10)

// for($x=1; $x<10;$x++){ 
//     if($x==5){ 
//         break;
//     }
//     echo $x." ";
// }

// function sum($a,$b){ 
//     echo $a+$b;
// }
// sum(20,30);

function addition($a,$b,$c){ 
    $sum = $a + $b + $c;
    $total = $sum/5;
    return $total ."<br/>";
}

// function percentage($per){ 
//     $total = $per * 5;
//     echo $total;
// }
$total = addition(20,30,100);
echo $total;
// percentage($total);
?>