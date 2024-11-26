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

$pnnumbers = [34,23,12,-9-5,4,0,-7,8,-44];

$positive = [];
$negetive = [];

foreach($pnnumbers as $number){ 
    if($number>0){ 
        $Positive[] =  $number;
    }elseif($number<0){ 
        $negetive[] = $number;
    }elseif($number == 0){ 
        echo "Zero found"."<br/>";
    }
}

echo "Positive Number = ". implode(" , ",$positive)."<br/>";
echo "Negetive Numbers = ".implode(' , ',$negetive);


?>