<?php

function CallBack($item){ 
    return strlen($item);
}

$array = ['banana','mango','pineapple','orragne'];

$new = array_map("CallBack",$array);
print_r($new);

echo "<br/>";
echo "<br/>";

$number = 45.678;
$n =( is_float($number));
var_dump($n);

echo "<br/>";
echo "<br/>";

echo "Today is ". date("y/m/d")."<br/>";
echo "Today is " . date("d-m-y")."<br/>";
echo "Today is ". date("d.m.y");


echo "<br/>";
echo "<br/>";


?>
<html>
<body>

  <?php
    $cname = "user";
    $cvalue = "John";
    setcookie($cname,$cvalue, time() + (86000*30),"/");
  ?>

  <?php
    if(!isset($_COOKIE[$cname])){ 
        echo "Cookie Is " . $cname . " Is Not Set ";
    }else{ 
        echo "Cookie Name Is " . $cname . " Set <br/>";
        echo "Cookie Value Is ". $cvalue . " Set ";
    }
  ?>
    
</body>
</html>