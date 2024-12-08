<?php

/*echo "hello";
echo "hello";*/

// $x = $y = $z = 'fruits';
// echo $x;
/*echo "<br/>";
echo "<br/>";*/
$x = 5;
$y = 10;

function MyFunction(){ 
    global $x,$y;
    $y = $x + $y;
}
MyFunction();
echo $y;
echo "<br/>";
echo "<br/>";

$i = 10;
$v = 20;
function MFunction(){ 
    $GLOBALS['y'] = $GLOBALS['i'] = $GLOBALS['v'];
    
}
MFunction();
print $y;
echo "<br/>";
echo "<br/>";
function Statics(){ 
    static $x = 0;
    echo $x;
    $x++;
}
Statics();
echo "<br/>";
Statics();
echo "<br/>";
Statics();
echo "<br/>";
echo "<br/>";

$names = 'tuhin';
function Tuhin (){ 
    global $names;
    echo $names;
}
Tuhin();
echo "<br/>";
echo "<br/>";
echo "tuhib",'ahmed','khan';
echo "<br/>";
echo "<br/>";
print "tuhin ahmed khan";
echo "<br/>";
echo "<br/>";

$hey = " Hello Tuhin";
$a =  explode(" ",$hey);
print_r($a);
echo "<br/>";
echo "<br/>";

$array = ['tuhin','ahmed','rafia','kabir','khan'];
// $string = implode(" ", $array);
// echo $string;
$out = array_map(function($item){return strlen($item);},$array);
print_r($out);

echo "<br/>";
echo "<br/>";
function CallBack($item){ 
    return strlen($item);
}
$a = ['tuhin','fruits','banana','orrange'];
$v = array_map('CallBack',$a);
print_r($v);

echo "<br/>";
echo "<br/>";

$json = '{"name":"Tuhin","profession":"developer","address":"Gaibandha","Company":"logic"}';
$array = json_decode($json);
print_r($array);

echo"<br/>";
echo"<br/>";
$arr = ['name'=>'tuhin','profession'=>'developer','company'=>'logic'];
$jsons = json_encode($arr);
echo $jsons;
echo"<br/>";
echo"<br/>";

$data = [3,5,8,-7,0,100];
$lnet = count($data);
for($x = 0 ; $x < $lnet; $x++){
    if($data[$x] == -7)continue;{ 
        echo $data[$x];
    }
}
echo"<br/>";
echo"<br/>";

echo (min(2,6,7));
echo"<br/>";
echo"<br/>";

function familName($fname, $year){ 
    echo "$fname Ahme . Born In $year  <br/>";
}
familName("Tuhin", "1993");
familName('Toukir', '1997');
familName('Abrar', '1994');
echo"<br/>";
echo"<br/>";

function MathF(& $num){ 
    $num += 5;
}
$num2 = 6;
MathF($num2);
echo $num2;

echo"<br/>";
echo"<br/>";

function sum ($x,$y){ 
    $z = $x + $y;
    return $z;
}

$result = sum(4,69);
echo $result;

echo"<br/>";
echo "<br/>";

$ara = [4,7,90,20-9,0];
foreach($ara as $r){ 
    if($r == -9) break;{ 
        echo $r." ";
    }
}
echo "<br/>";
echo "<br/>";

$names = array(
    array('name'=>'tuhin','profession'=>'developer','compnay'=>'logic'),
    array('age'=>30,'address'=>'dhaka','email'=>'mtuhin@gmail.com')
);
foreach ($names as $key=>$data){ 
    echo "Row = $key <br/>";
    foreach($names[$key] as $subkey => $d){ 
        echo "SubKey : $subkey Value = $d <br/>";
    }
}
echo "<br/>";
echo "<br/>";

$names = array(
    array('name'=>'tuhin','profession'=>'developer','compnay'=>'logic'),
    array('age'=>30,'address'=>'dhaka','email'=>'mtuhin@gmail.com')
);

foreach($names as $key=> $data){ 
    echo "Index : $key <br/>";
    foreach($data as $subkey => $value){ 
        echo " $subkey : $value <br/>";
    }
}

echo "<br/>";
echo "<br/>";

$arrays = array(
    array('volvo'=>345,'name'=>'tuhin'),
    array('toyota'=>'brand','price'=>67890),
    array('bmw'=>'brand','price'=>67890),
    array('audi'=>'brand','price'=>67890),
);

for($row = 0; $row < 4 ; $row ++){ 
    echo "Row Number = $row <br?";
    foreach($arrays [$row] as $key => $value){ 
        echo "Key, $key : $value <br/>";
    }
}

echo "<br/>";
echo "<br/>";
echo "<br/>";

$rafia = '{"name":"Rafia","profession":"Alsha","status":"married with tuhin"}';
$arra = json_decode($rafia);
print_r($arra);
echo "<br/>";
echo "<br/>";
echo "<br/>";

$array = ['name'=>'Tuhin','address'=>'gaibandha','profession'=>'developer','company'=>'logic'];
$json = json_encode($array);
echo $json;
echo "<br/>";
echo "<br/>";
echo "<br/>";

$multi = [
    ['first'=>'name','second'=>'profession','third'=>'address'],
    ['second'=>'hi','second'=>'profession','third'=>'dhaka'],
    ['third'=>'hello','second'=>'profession','third'=>'gaibandha'],
    ['four'=>'hey','second'=>'profession','third'=>'barishal'],
];

// for($x = 0; $x < 4; $x++){ 
//     echo " Row = $x <br/>";
//     foreach($multi[$x] as $key => $data){ 
//         echo "Key = $key Value = $data <br/>";
//     }
// }

for($row = 0; $row < 4; $row ++){ 
    echo "Row = $row <br/>";
   foreach($multi[$row] as $key => $data){ 
    echo "$key : $data <br/>";
   }
}



