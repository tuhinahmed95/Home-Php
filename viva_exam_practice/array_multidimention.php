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

// $x = 0;

// while($x<6){ 
//     $x++;
//     if($x == 3) continue;
//     echo $x;
// }

// $x = 0;

// while($x < 100){ 
//     $x += 10;
//     if($x ==70)break;
//     echo $x. " ";
// }

// $i = 9;
// do{ 
//  if($i ==12) continue;

//     echo $i." ";
//     $i++;

// } while($i<45);

// $i = 0;
// for($i=0; $i<10; $i++){ 
//     if($i == 4)continue;
//     echo $i;
// }

// $arrays = ['red','green','blue','yello'];
// foreach($arrays as $array){ 
//     echo $array ." ";
// }

// $arrays = ['name'=>'tuhin','age'=>34,'profession'=>"Senior Developer"];

// foreach($arrays as $key => $value){ 
//     echo " $key : $value"."<br/>";
// }

// class Car { 
//     public $model;
//     public $color;
//     public function __construct($model,$color)
//     {
//         $this->model=$model;
//         $this->color=$color;
//     }
// }
// $myCar = new Car('BMW',"Black");
// foreach($myCar as $x => $y){ 
//     echo "$x : $y"."<br/>";
// }

// $numbers = [3,5,6,-9,10,23];
// foreach($numbers as $number){ 
//     if($number == 5)continue;{ 
//         echo $number;
//     }
// }

// $arrays = ['blue','green','red','yello'];
// foreach($arrays as $array){ 
//     if($array == "red") $array=="yello";
// }
// var_dump($arrays);

// function myMessage($model = "rtx90"){ 
//     echo "This is a model : $model <br/>";
// }
// myMessage();
// myMessage('model56');
// myMessage('model 999');

function myfunction(...$x){ 
    $n = 0;
    $len = count($x);
    for($i=0; $i<$len; $i++){ 
        $n += $x[$i];
        return $n;
    }
}
$sum = myfunction(3,5,6,6,7,7,8,8,9);
echo $sum;


?>