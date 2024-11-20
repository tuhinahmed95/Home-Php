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

class Car { 
    public $model;
    public $color;
    public function __construct($model,$color)
    {
        $this->model=$model;
        $this->color=$color;
    }
}
$myCar = new Car('BMW',"Black");
foreach($myCar as $x => $y){ 
    echo "$x : $y"."<br/>";
}
?>