<?php
// function my_callback ($item){ 
//     return strlen($item);
// }

// $strings = ['apple','banana','orrange','coconut'];
// $length = array_map(function($item){return strlen($item);},$strings);
// // $length = array_map("my_callback",$strings);
// // print_r($length);
// print_r($length);

function my_callback ($item){ 
    return strlen($item);
}

$array = ['tuhin','tasrif','tomal','shakib','imran'];
$length = array_map("my_callback",$array);
print_r($length);

echo "<br/>";
echo "<br/>";

$strings = ['apple','banana','orrange','coconut','pineapple'];
$len = array_map(function($item){return strlen($item);},$strings);
print_r($len);

echo "<br/>";
echo "<br/>";

function my_callbacks ($items){ 
    return strlen($items);
}

$arrays = ['arafat','sabbir','akash',456,89.76];
$len = array_map('my_callbacks',$arrays);
print_r($len);

echo "<br/>";
echo "<br/>";

$arr = ['apple','banana','pineapple','mango','jacfruits'];
$l = array_map(function($i) {return strlen($i);},$arr);
print_r($l);

echo "<br/>";
echo "<br/>";

function callbac ($item){ 
    return strlen($item);
}

$a = ['tanvir','toha','java','pdf'];
$len = array_map('callbac',$a);
print_r($len);

echo "<br/>";
echo "<br/>";

$ar = ['hafiz','anurag','hedayet','salman'];
$lent = array_map(function($item) {return strlen($item);},$ar);
print_r($lent);

echo "<br/>";
echo "<br/>";

function CallBack($item){ 
    return strlen($item);
}

$array = ['tuhin','tasrif','toha'];
$lent = array_map('CallBack',$array);
print_r($lent);

echo "<br/>";
echo "<br/>";

$arr = ['tuhin','toha','tanvir','joha'];

$lent = array_map(function($itme){return strlen($itme);},$arr);
print_r($lent);

echo "<br/>";
echo "<br/>";

function MyFunction($firstname){ 
    echo $firstname .' '. "Ahmed";
}

MyFunction('Tuhin');

?>