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
?>