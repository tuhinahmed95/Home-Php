<?php
// practice castig
$string = "php_casting practice";
$int = (int)$string;
echo $int;
// var_dump($int);
echo "<br/>";
echo "<br/>";

$arrays = ['tuhin','aryan','salman','amir'];
// $str = (string)$arrays;
$strr = implode(" ,", $arrays);
echo $strr;
echo "<br/>";
echo "<br/>";

$str = "tuhin Ahmed Gaibandha";
$array = (array)$str;
print_r($array);
echo "<br/>";
$bol = true;
$ar = (array)$bol;
print_r($ar);
echo "<br/>";
echo (pi());
echo "<br/>";
$math = [34,56,2,78,34,78];
echo (max($math));
echo "<br/>";
echo (abs(-7.8));
echo "<br/>";
$n = 64;
echo (sqrt($n));
echo "<br/>";
echo (rand(1,9));
echo "<br/>";
echo (round(5.4));
echo "<br/>";

define('name','values');
echo name;
echo "<br/>";

define('cars',[
    'BMW','Volvo','Mercidies'
]);
echo cars[2];

echo "<br/>";

$string = '{"name":"Tuhin","Profession":"Developer","Address":"Gaibandha"}';
$arry = json_decode($string);
print_r($arry);
echo "<br/>";
$arr = ['tuhin','ahmed','hello','world'];
$json = json_encode($arr);
echo $json;
echo "<br/>";

function CalBack($item){ 
    return strlen($item);
}

$ary = ['tuhin','ahmed','tasrif'];
$str = array_map("CalBack",$arr);
print_r($str);
echo "<br/>";

$tuna = ['tanvir','aslam','mister','coconut'];
$str = array_map(function($item){return strlen($item);},$tuna);
print_r($str);

echo "<br/>";
function MyFunction($items){ 
    return strlen($items);
}

$a = ['fruits','coconut','orrange','apple'];
$lent = array_map("MyFunction",$a);
print_r($lent);

echo "<br/>";
echo "<br/>";

$names = "User";
$value = "Cokkie_Vlaue_Ales";

setcookie($names,$value, time()+ 86400*30 , "/");

if(!isset($_COOKIE[$names])){ 
    echo "Cokkies Name ". $names . " Is Not Set ". "<br/>";
}else { 
    echo "Cokkie Name " . $names . " Is Set"."<br/>";
    echo "Cokkie Value " . $_COOKIE[$names];
}

echo "<br/>";
echo "<br/>";

$newAray = ['bmw','volvo','toyota','x-corola'];
array_unshift($newAray,'Lambergini');
print_r($newAray);
echo "<br/>";
echo "<br/>";

$assA = array("name"=>"Tuhin","profession"=>"developer","position"=>"junior","company name"=>"logic software lt");
foreach($assA as $key=>$arry){ 
    echo " $key : $arry <br/>";
}

echo "<br/>";
echo "<br/>";

$arays = [3,6,9,-5,0];

foreach($arays as $array){ 
    if($array == -5) continue;{ 
        echo "Negetive = " . $array ."<br/>";
    }
}
// $lent = count($arrays);
// for($i = 0; $i < $lent ; $i ++){ 
//     if($arays[$i] == -5)break;
//     echo $arays [$i];
// }

echo "<br/>";
echo "<br/>";

$array = [5,7,-9,23,10];
// foreach($array as $array){ 
//     if($array == -9)break;{ 
//         echo $array."<br/>";
//     }
// }

$lent = count($array);
for($i = 0; $i < $lent ; $i ++){ 
    if($array[$i] == -9)break; { 
        echo $array[$i]."<br/>";
    }
}

echo "<br/>";
echo "<br/>";

define('names','tuhin ahmed khan');
echo names;

echo "<br/>";

$marks = 70;

switch($marks){ 
    case 90:
    echo "Your Result Is = A +";
    break;
    case 70:
    echo "Your Result Is = A";
    break;
    case 60:
    echo "Your Result Is = A - ";
    break;
    case 50:
    echo "Your Result Is = B";
    break;
    case 40:
    echo "Your Result Is = C";
    break;
    case 33:
    echo "Your Result Is = D";
    break;
    default:
    echo "Your Are Fail";
}

echo "<br/>";
echo "<br/>";

function CallBack ($item){ 
    return strlen($item);
}

$array = ['tuhin','shakib','ahmed','rizwan khan','salman butt'];
$lent = array_map("CallBack",$array);
print_r($lent);

echo "<br/>";
echo "<br/>";

$arrays = ['abir','aslam','mister','salim','bellal'];
$len = array_map(function($item){return strlen($item);},$arrays);
print_r($len);

echo "<br/>";
echo "<br/>";

function MyFunctions ($item){ 
    if($item > 10){ 
        echo $item . "<br/>";
    } else {
        echo "Parameeter large to 10";
    }
}

MyFunctions(20);
MyFunctions(8);

echo "<br/>";
echo "<br/>";


function MyFunctionss($item) {
    if ($item > 10) { 
        echo $item . "<br/>";
    } else {
        echo "প্যারামিটারটি ১০ এর থেকে বড় হতে হবে।<br/>";
    }
}

MyFunctionss(15); 
MyFunctionss(5);  

echo "<br/>";
echo "<br/>";

$marray = ['name'=>'tuhin','profession'=>'developer','position'=>'junior','company'=>'logic software'];
// $p = array_change_key_case($marray,CASE_LOWER);
// print_r($p);
$change = array_change_key_case($marray,CASE_UPPER);
// foreach($marray as $key => $arr){ 
//     echo "key = $key = Value = $arr <br/>";
// }

echo "<br/>";
echo "<br/>";

$tuhin = ['ahmed','khan','rafia','anika','fariha','sunnah','atif','akbar','jafar'];
// $t = array_chunk($tuhin,3);
// print_r($t)."<br/>";
$a = array_chunk($tuhin,2);
print_r($a);

echo "<br/>";
echo "<br/>";

$marray = [
    [
        'id'=>1234,
        'firstname'=>'Tuhin',
        'lastname'=>'Ahmed',
        'email'=>'mtuhinahmed@gmail.com'
    ],
    [
        'id'=>5678,
        'firstname'=>'Abir',
        'lastname'=>'Hasan',
        'email'=>'abir@gmail.com'
    ],
    [
        'id'=>9012,
        'firstname'=>'Abrar',
        'lastname'=>'Khan',
        'email'=>'khan@gmail.com'
    ]
    ];

$newArray =array_column($marray,'id','email');
print_r($newArray);

echo "<br/>";
echo "<br/>";

$email = array('tuhin','aslam','mister');
$name = array('mtuhin@gmail.com','aslam@gmail.com','mister@gmial.com');
$c = array_combine($email,$name);
print_r($c);

echo "<br/>";
echo "<br/>";

$animals = array('dog','cat','monkey','dog','cow','eliphant','cow','dog');
$count = array_count_values($animals);
print_r($count);

?> 