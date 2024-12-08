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