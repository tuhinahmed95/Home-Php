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

$cname = "User";
$cvalue = 'John';
setcookie($cname,$cvalue,time() + (86000*30),"/");




?>

<html>
<body>
    <?php
    if(!isset($_COOKIE[$cname])){ 
        echo " Cookie name ". $cname . " Is Not Set";
    }else{ 
        echo "Cookie ". $cname . " is Set";
        echo "value " . $cvalue . " Set";
    }


    ?>
</body>
</html>