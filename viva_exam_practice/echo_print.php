<?php

// $number = '123';

// $int = (int)$number;
// echo $int;

// $string = "tuhin";

// $string2 = (string)$string;
// echo $string2;

// $number = "123.59";
// $foat = (float)$number;
// echo $foat;

// $vari = "123";
// $string = (string)$vari;
// echo $string;

// $bol = 10;
// $bolvalue = (string)$bol;
// echo $bolvalue;

// $number = 123;
// $string_number = (string)$number;
// echo $string_number; 

// $name = 'hello';
// $array = (array)$name;
// print_r ($array);

// $names = ['name'=>'tuhin','age'=>30];
// // $object = (object)$names;
// echo $names;

// function myfunction(){ 
//     $loacl = "local variable";
//     echo $loacl;
// }

// myfunction();

// $golabal = "this is global variables";

// function globalfunction(){ 
//     global $golabal;
//     echo $golabal;
// }

// globalfunction();

// $golabalvar = "i am gloabal variables";
// function worldvar(){ 
//    echo $GLOBALS ['golabalvar'];
// }
// worldvar();

// define('test', 50,true);
// // echo (string)test;
// // $sum = test + 50;
// // echo $sum;
// echo Test;

// define("rafia","tuhin",true);
// echo rafia;

// $names = "tuhin";
// $int = (string)$names;
// echo $int;

// $x = 10;

// function display(){ 
//     global $x;
//     echo "$x  <br/>";
//     $y = 16;
// }
// display();
// echo $x;
// // echo $y;

// function display(){ 
//     $y = 10;
//     echo $y;
// }
// display();

// $number = array(30,40,50,80);
// echo $number[3];

// $colours = array('red','green','yello',20,'pink',11.30,'powderblue');

// // // echo $colours[0]."<br/>";
// // // echo $colours[1]."<br/>";
// // // echo $colours[2]."<br/>";
// // // echo $colours[3]."<br/>";
// // // echo $colours[4]."<br/>";
// // // echo $colours[5]."<br/>";
// // // echo $colours[6]."<br/>";
// // echo "<pre>";
// // print_r($colours);
// // echo "</pre>";

// $color = ['red','green','yello',30,'blue','skyblue'];

// echo "<ul>";

// for($x = 0; $x<=5; $x++){ 
//     echo "<li> $color[$x]</li>";
// }

// echo "</ul>";

// $color[0]='tuhin';
// $color[1]='jakir';
// $color[2]='mamun';
// $color[3]='shahin';

// for($x=0;$x<=3; $x++){ 
//     echo $color[$x]."<br/>";
// }

// $names = array(
//     "name1" => 40,
//     "name2" => 40,
//     "name3" => 40,
// );
// echo "<pre>";
// var_dump($names) ;
// echo "<pre/>";

// echo $names["name1"]


// $num = [10,30,38];
// foreach($num as $value){ 
//     echo "$value<br/>";
// }

// $age = [
//     "Steve"=>30,
//     "Tuhin"=>29,
//     "Rafia"=>31,
// ];
// foreach($age as $key=>$value){ 
//     echo $key. " = ". $value . "<br/>";
// }

//multidimontion array

// $employ = [
//     [1,'Tuhin','senior developer',70000],
//     [2,'rafia','juniour developer',33000],
//     [3,'jakir','fresher developer',7000],
//     [4,'tasrif','mid developer',7090],
// ];

// echo "<table border='2px' cellpadding='5px'cellspacing='0'> ";  
// foreach($employ as $v1){ 
//     echo "<tr>"; 
//     foreach($v1 as $v2){ 
//         echo "<td>$v2</td>";
//     }
//     echo "<tr/>";
// }

// echo "</table>";

// $emp = [
//     [1,'Tuhin','Senior Developer',90000],
//     [2,'Tasrif','Automobile Enginier',38000],
//     [3,'Shabbir','Teacher',9000],
//     [4,'Toukir','Police Office',22000],
//     [5,'Emra','enginier',67000],
// ];

// echo" <table> ";

// for($row = 0; $row<4; $row++){ 
//     for($col=0; $col<4; $col++){ 
//         echo $emp[$row][$col]."<br/>";
//     } 
// }
// echo "</table>";

// $names = [
//     [1,'Tuhin','Developer',39000],
//     [1,'Ripn','Teacher',22000],
//     [1,'Mamun','Doctor',30000],
//     [1,'Rafia','Junior Enginier',25000],
// ];

// echo "<table border='2px' cellpadding='5'cellspacing='0'> ";

// foreach($names as $data){ 
//   echo "<tr>";  
//   foreach($data as $value){ 
//         echo "<td>$value <td/>";
//     }
//     echo "</tr>";
// }

// echo "</table>";

// $names = array('tuhin','tanvir','tomal','tasrif');
// for($x = 0; $x<4; $x++){ 
//     echo $names[$x];
// }

// $color = array('first'=>'red','second'=>'green','third'=>'yello','four'=>'blue','five'=>'skyblue');

// // for($x = 0; $x < 5; $x++){ 
// //     echo $color[$x];
// // }

// echo "<pre>";
// var_dump($color);
// echo "<pre/>";

// $marks = [
//     "Tuhin"=>['physics'=>80,'chemistry'=>89,'math'=>96],
//     "Rafia"=>['physics'=>78,'chemistry'=>78,'math'=>90],
//     "Salman"=>['physics'=>87,'chemistry'=>67,'math'=>78],
// ];
// echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
// foreach($marks as $key => $value1){ 
//     echo "<tr>";
//     echo "<td>$key</td>";
//     foreach($value1 as $value2){ 
//         echo "<td>$value2</td>";
//     }
//     echo "<tr/>";
// }
// echo "<table/>";


// echo "<pre>";
// // var_dump($marks);
// print_r( $marks);
// echo "<pre/>";

// $number = [
//     'tuhin'=>['age','profession','address'],
//     'tasris'=> ['name','education','status'],
// ];

// echo count($number);

// $fruits = ['apple','banana','orange'];
// array_unshift($fruits,'pineapple');

// echo "<pre>";
// print_r($fruits);
// echo "</pre>";


