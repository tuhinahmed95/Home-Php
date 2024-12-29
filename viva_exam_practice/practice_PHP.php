<?php

function CallBack($item){ 
    return strlen($item);
}

$array = ['banana','mango','pineapple','orragne'];
print_r($array);

$new = array_map("CallBack",$array);
print_r($new);

echo "<br/>";
echo "<br/>";

function Mfunction($num1,$num2,$num3 = 10){ 
    echo $num1 + $num2 + $num3;
}
Mfunction(5,10);

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

$var = [10,45,7,9,-4,90,100];
foreach($var as $v){ 
    if($v == -4)continue;
    echo $v. " ";
}

echo "<br/>";
echo "<br/>";

$va = 5;
do{ 
    echo $va." ";
    $va++;
}while($va < 20);
echo "<br/>";
echo "<br/>";

$strings = ["red",'green','blue','yello'];
foreach($strings as $string){ 
    if($string == 'blue')continue;
    echo $string . "<br/>";
}

echo "<br/>";
echo "<br/>";
?>
<html>
<body>
<style>
    table.th.td{ 
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
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

    echo "<br/>";
    echo "<br/>";

    $expression = '';

    switch($expression){ 
        case 'red':
        echo "Favorite Color is red";
        break;
        case 'green';
        echo "Favorite Color is Green";
        break;
        default:
        echo "Favorite color is Blue";
    }

    echo "<br/>";
    echo "<br/>";

    
  ?>
    
   
    <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter Id</td>
        </tr>

        <?php
            foreach(filter_list() as $id => $filter){ 
                echo '<tr> <td>'.$filter .'</td> <td>' .filter_id($filter) .'</td> </tr>';
            }
        ?>
    </table>
    
</body>
</html>