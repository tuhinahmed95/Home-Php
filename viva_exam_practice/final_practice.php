<?php 

$names = "Tuhin Ahmed";
// echo strlen($names)."<br>";
echo str_replace('Ahmed','khan',$names)."<br>";
// echo str_word_count($names);
echo "<br/>";
echo "<br/>";

$n = " Abir Mondol";
echo trim($n);
echo "<br/>";
echo "<br/>";
$na = "Tuhin Ahmed";
echo substr($na, 3);
echo "<br/>";

$test = "Hello World \"how are you\"";
echo $test;

echo "<br/>";
echo "<br/>";
$test2 = "hellow world \$name";
echo $test2;
echo "<br/>";
echo "<br/>";

$t = "hellow \rWorld";
echo $t;
echo "<br/>";
$num = 'tuhin';
$string = (int)$num;
echo $string;
echo "<br/>";
echo "<br/>";
$numbers = [12,34,56,89,99];
$lent = count($numbers);
for($x = 0; $x < $lent ; $x ++){ 
    if($numbers[$x] == 56)continue;{ 
        echo $numbers[$x]."<br/> ";
    }
}
echo "<br/>";
echo "<br/>";
echo rand(10,20);
echo "<br/>";
echo "<br/>";
$sqr = 64;
echo sqrt($sqr);
echo "<br/>";
echo "<br/>";
echo round(5.7);
echo "<br/>";
echo abs(-6.8);
echo "<br/>";
echo "<br/>";
define('names',['tuhin abir saikot']);
print_r(names);
// print_r(min($numbers));
echo "<br/>";

const name = "Tuhin Ahmed";
echo name;
echo "<br/>";
define('namess','hi this is tuhin');
function Test(){ 
    echo namess;
}
Test();
echo "<br/>";
echo "<br/>";
$n = 10;
echo $n;
echo "<br/>";
echo "<br/>";

$color = "red";
switch($color){ 
    case "red":
        echo "Favorite red";
    break;
    case "green":
        echo "favorite green";
    break;
    default:
    echo "favorite black";        
}

echo "<br/>";
echo "<br/>";
$y = 1;
while($y <6){ 
    echo $y;
    $y++;
}
echo "<br/>";
echo "<br/>";
$z = 1;
do{ 
    echo $z;
    $z++;
} while($z <5);
echo "<br/>";
echo "<br/>";

for($x = 0; $x < 10; $x ++){ 
    if( $x ==5) break;{ 
        echo $x."<br/>";
    }
}
echo "<br/>";
echo "<br/>";

$colors =[ 
     ['red','green','orrange','black','white'],
     ['red','green','PowderBlue','black','white'],
     ['red','green','PineApple','black','white'],

    ];

foreach ($colors as $row=>$value){ 
    echo "Row = $row <br/>";
    foreach($value as $data){ 
        echo $data ."<br/>";
    }
}   
echo "<br/>";
echo "<br/>";

function MyFunction($num1, $num2,$num3 = 50){ 
    echo "The Sum Is =". $num1 + $num2 -$num3;
}
MyFunction(10,20);


// foreach($colors as $col){ 
//     echo $col."<br/>";
// }
echo "<br/>";
echo "<br/>";
$car = ['ford','volvo','toyota'];
$car[10] = "hayavusa";
// array_pop($car);
print_r($car);
echo "<br/>";
echo "<br/>";

$assos = ['name'=>"tuhin",'profession'=>'software Enginier','company'=>"logic"];
$assos +=['address'=>"gaibandha",'status'=>'single'];
print_r($assos); 
$assos['company'] = 'BrainStation';
// print_r($assos);
foreach($assos as $key =>$value){ 
    echo "$key $value <br/>";
   
}
echo "<br/>";
$car = ['ford','volvo','toyota'];
foreach($car as &$c){ 
    $c = "Toyota";
}
unset($c);
print_r($car);
// var_dump($car);
echo "<br/>";
echo "<br/>";

$carr = ['ford','volvo','toyota','lambergini','audi','bmw'];
rsort($carr);
print_r($carr);
echo "<br/>";
echo "<br/>";

$assos = ['name'=>"tuhin",'profession'=>'software Enginier','company'=>"logic"];
krsort($assos);
print_r($assos);

echo "<br/>";
echo "<br/>";

$multiDimention = [
    ['name'=>'tuhin','profession'=>'enginieer'],
    ['status'=>'single','age'=>30],
    ['address'=>'gaibandha','education'=>'M.A']
];

foreach ($multiDimention as $row => $multiD){ 
    echo "Row Is $row <br/>";
    foreach($multiD as $col => $value){ 
        echo "$col =  $value <br/>";
    }
}

echo "<br/>";
echo "<br/>";


$aso = ['name'=>"tuhin",'profession'=>'software Enginier','company'=>"logic"];
$new = array_change_key_case($aso,CASE_LOWER);
print_r($new);






?>