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
  ?>
    
    <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter id</td>
        </tr>

        <?php
            foreach(filter_list() as $id =>$filter){ 
                echo '<tr> <td>'.$filter.'</td> <td>'.filter_id($filter).'</td></tr>';
            }
        ?>
    </table>
    
</body>
</html>