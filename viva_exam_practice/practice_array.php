<?php

$cars = ['volvo','audi','bmw'];
$cars [1] = "lambargini";
array_push($cars,"mercedis");
array_pop($cars);
array_shift($cars);
array_unshift($cars,'toyota');
print_r($cars)."<br/>";

$bikes = ['pulser','Royal Enfield','zixer','R15','Xblade'];
foreach($bikes as $bike){ 
    echo $bike. " ";
}
echo "<br/>";

$carss = array('name'=>'Audi','brand'=>'Audi-34','price'=>3456000);
// array_push($carss,"color","red","year",1994);
// $carss['name']= "BMW";
// var_dump($carss);
// // print_r($carss);

foreach($carss as $key=>$cars){ 
    echo "$key : $cars <br/>";
}

echo "<br/>";

function Myfunction(){
    echo "This is a function";
}

$array = ['tuhin','salman','message'=>Myfunction()];
$array['message']();

?>