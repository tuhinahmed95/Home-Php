<?php
$c_name = "Cookie_Name";
$c_value = "Cookie_Value";

setcookie($c_name,$c_value,time()+ (86400*30),"/");

if(isset($_COOKIE[$c_name])){ 
    echo "Cookie ".$c_name. "Is Not Set";
}else{ 
    echo "Cookie Is ".$c_name ."Set";
    echo "Value ".$_COOKIE[$c_name];
}
echo "<br/>";

setcookie('user','Cookie_Value',time()-3600);
if(count($_COOKIE)>0){ 
    echo "Cookie is deleted";
}
echo "<br/>";

setcookie('user','',time()+3600,'/');
echo "Cookie 'user' is deleted";

echo "<br/>";
setcookie('test_cookie','test',time()+3600,'/');

if(count($_COOKIE)>0){ 
    echo "Cookie is enable";
}else{ 
    echo "Cookie is disable";
}

echo "<br/>";

$string = "23";
$int = (int)$string;
echo $int;
echo "<br/>";
echo round(3.56);
echo "<br/>";
echo rand(10,100);
echo "<br/>";
$number = [23,55,66];
// var_dump($number);
echo (min($number));
echo "<br/>";
echo pi();
echo "<br/>";

$strings = array('name'=>'tuhin','profession'=>'senior developer','address'=>'Gaibandha');

foreach($strings as $key=>$sting){ 
    echo "Key = " . $key . ",Value = " . $sting."<br/>";
}

echo "<br/>";

$numbers = [45,23,56,78,90,-4,0];
$length = count($numbers);
for($x = 0; $x < $length ; $x++){ 
    if($numbers[$x] == -4)break;
    echo $numbers[$x]."<br/>";
}

echo "<br/>";
echo "<br/>";

$pnnumbers = [34,23,12,-95,4,0,-7,8,-44];

$positive = [];
$negetive = [];

foreach($pnnumbers as $number){ 
    if($number>0){ 
        $positive[] =  $number;
    }elseif($number<0){ 
        $negetive[] = $number;
    }elseif($number == 0){ 
        echo "Zero found"."<br/>";
    }
}

echo "Positive Number = ". implode(" , ",$positive).PHP_EOL."<br/>";
echo "Negetive Numbers = ".implode(' , ',$negetive).PHP_EOL;

echo "<br/>";
echo "<br/>";

$mnumbers = [34,-4,8,-9,5,6,-9,2,0];

$positives = [];
$negetives = [];

foreach($mnumbers as $num){ 
    if($num > 0){ 
        $positives[] = $num;
    }elseif($num<0){ 
        $negetives[] = $num;
    }elseif($num == 0){ 
        echo "This Is A Zero = 0"."<br/>";
    }
    
}

 echo "Positive Numbers = " . implode(" ,",$positives)."<br/>". PHP_EOL;
 echo "Negetive Numbers = ". implode(" ,",$negetives).PHP_EOL;

echo "<br/>";
echo "<br/>";

$pn = [-9,3,-8,4,6,0,-9];
$ps = [];

foreach($pn as $p){ 
    if($p >0){ 
        $ps [] = $p;
    }
}
echo "Positive = ". implode(" ,",$ps);

echo "<br/>";

$x = 1;
do{ 
    if($x ==3)break;
    echo $x."<br/>";
    $x++;
} while($x < 6);

echo "<br/>";

function myFunction($number = 50){ 
    echo "Number is = ".$number."<br/>";
}

myFunction();
myFunction(100);
myFunction(200);

echo "<br/>";

function sum($x,$y){ 
    $z = $x + $y;
    return $z;
}

echo "6 + 7 = ". sum(6,7)."<br/>";
echo "6 + 10 = ". sum(6,10)."<br/>";
echo "6 + 9 = ". sum(6,9)."<br/>";
// echo "Total = ".$result;

$numbers = [45,6,-7,9,0,-4,10,5];
$positive = [];
$negetive = [];

foreach($numbers as $number){ 
    if($number > 0){ 
        $positive [] = $number;
    }elseif ($number < 0){ 
        $negetive [] = $number;
    }elseif ($number == 0){ 
        echo "This is a Zero = 0"."<br/>";
    }
}

echo "Positive Numbers = " . implode(" ,", $positive)."<br/>";
echo "Negetive Numbers = " . implode(" ,", $negetive);

echo "<br/>";
echo "<br/>";

$number = [34,5,6,9,5,8,-3,0,2];
$len = count($number);
for($x = 0; $x <$len ; $x ++){ 
    if($number[$len] == -3) continue;
    echo $number[$x]."<br/>";
}


?>