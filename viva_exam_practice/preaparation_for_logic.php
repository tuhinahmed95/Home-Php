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
echo"<br/>";
echo"<br/>";

echo (min(2,6,7));
echo"<br/>";
echo"<br/>";

function familName($fname, $year){ 
    echo "$fname Ahme . Born In $year  <br/>";
}
familName("Tuhin", "1993");
familName('Toukir', '1997');
familName('Abrar', '1994');
echo"<br/>";
echo"<br/>";

function MathF(& $num){ 
    $num += 5;
}
$num2 = 6;
MathF($num2);
echo $num2;

echo"<br/>";
echo"<br/>";

function sum ($x,$y){ 
    $z = $x + $y;
    return $z;
}

$result = sum(4,69);
echo $result;

echo"<br/>";
echo "<br/>";

$ara = [4,7,90,20-9,0];
foreach($ara as $r){ 
    if($r == -9) break;{ 
        echo $r." ";
    }
}
echo "<br/>";
echo "<br/>";

$names = array(
    array('name'=>'tuhin','profession'=>'developer','compnay'=>'logic'),
    array('age'=>30,'address'=>'dhaka','email'=>'mtuhin@gmail.com')
);
foreach ($names as $key=>$data){ 
    echo "Row = $key <br/>";
    foreach($names[$key] as $subkey => $d){ 
        echo "SubKey : $subkey Value = $d <br/>";
    }
}
echo "<br/>";
echo "<br/>";

$names = array(
    array('name'=>'tuhin','profession'=>'developer','compnay'=>'logic'),
    array('age'=>30,'address'=>'dhaka','email'=>'mtuhin@gmail.com')
);

foreach($names as $key=> $data){ 
    echo "Index : $key <br/>";
    foreach($data as $subkey => $value){ 
        echo " $subkey : $value <br/>";
    }
}

echo "<br/>";
echo "<br/>";

$arrays = array(
    array('volvo'=>345,'name'=>'tuhin'),
    array('toyota'=>'brand','price'=>67890),
    array('bmw'=>'brand','price'=>67890),
    array('audi'=>'brand','price'=>67890),
);

for($row = 0; $row < 4 ; $row ++){ 
    echo "Row Number = $row <br?";
    foreach($arrays [$row] as $key => $value){ 
        echo "Key, $key : $value <br/>";
    }
}

echo "<br/>";
echo "<br/>";
echo "<br/>";

$rafia = '{"name":"Rafia","profession":"Alsha","status":"married with tuhin"}';
$arra = json_decode($rafia);
print_r($arra);
echo "<br/>";
echo "<br/>";
echo "<br/>";

$array = ['name'=>'Tuhin','address'=>'gaibandha','profession'=>'developer','company'=>'logic'];
$json = json_encode($array);
echo $json;
echo "<br/>";
echo "<br/>";
echo "<br/>";

$multi = [
    ['first'=>'name','second'=>'profession','third'=>'address'],
    ['second'=>'hi','second'=>'profession','third'=>'dhaka'],
    ['third'=>'hello','second'=>'profession','third'=>'gaibandha'],
    ['four'=>'hey','second'=>'profession','third'=>'barishal'],
];

// for($x = 0; $x < 4; $x++){ 
//     echo " Row = $x <br/>";
//     foreach($multi[$x] as $key => $data){ 
//         echo "Key = $key Value = $data <br/>";
//     }
// }

for($row = 0; $row < 4; $row ++){ 
    echo "Row = $row <br/>";
   foreach($multi[$row] as $key => $data){ 
    echo "$key : $data <br/>";
   }
}

echo "<br/>";
echo "<br/>";

$test = ['tuhin','khan','rafia'];
$test[0]= "Tuhin Ahmed";
print_r($test);
echo "<br/>";
echo "<br/>";

$test2 = ['name'=>'rafia','address'=>'gaibandha','age'=>33];
$test2['name'] = 'Rafia Kabir Khan';
print_r($test2);
echo "<br/>";
echo "<br/>";

$test3 = ['habib','kahn','orrange'];
$test3 [] = 'Tuhin';
print_r($test3);
echo "<br/>";
echo "<br/>";

$test4 = ['name'=>'tuhin','address'=>'gaibandha'];
$test4 ['profession'] = 'Developer';
print_r($test4);

echo "<br/>";
echo "<br/>";
echo "<br/>";

$newa = ['tuhin','ahmed','khan','rafia','kabir','fariha','anika','sunnah'];
array_splice($newa,1,3);
print_r($newa);
echo "<br/>";
echo "<br/>";

$newa = ['tuhin','ahmed','khan','rafia','kabir','fariha','anika','sunnah'];
unset($newa[0],$newa[5]);
print_r($newa);

echo "<br/>";
echo "<br/>";

$khan = ['tuhin','ahmed','shakib','aslam','rafsan'];
// array_splice($khan,0,2);
// print_r($khan);
// unset($khan[3],$khan[0]);
// print_r($khan);
// $khan [0] = "Tuhin Ahmed Khan";
// print_r($khan);
rsort($khan);
print_r($khan);
echo "<br/>";
echo "<br/>";

$newa = ['name'=>'tuhin','profession'=>'developer','address'=>'gaibandha','company'=>'logice'];
// ksort($newa);
// print_r($newa);
krsort($newa);
print_r($newa);

echo "<br/>";
echo "<br/>";

$multid = [
    ['name'=>'tuhin','age'=>30,'profession'=>'developer','adress'=>'gaibandha','company'=>'logice'],
    ['name'=>'tuhin','age'=>30,'profession'=>'developer','adress'=>'gaibandha','company'=>'logice'],
    ['name'=>'tuhin','age'=>30,'profession'=>'developer','adress'=>'gaibandha','company'=>'logice'],
    ['name'=>'tuhin','age'=>30,'profession'=>'developer','adress'=>'gaibandha','company'=>'logice'],
];

foreach($multid as $key =>$data){ 
    echo "Row = $key <br/>";
    foreach($data as $k => $value){ 
        echo "key = $k : $value <br/>";
    }
}

echo "<br/>";

// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

echo "<br/>";
echo "<br/>";

$arrays = ['tuhin','ahmed','sabbir','tasrif','nehal','ripon','munna'];

print_r(array_chunk($arrays,3));

echo "<br/>";
echo "<br/>";

$first = ['tuhin','tasrif','nehal','sabbir'];
$second = [30,31,27,23];
$combine = array_combine($first,$second);
print_r($combine);

echo "<br/>";
echo "<br/>";
$multi = ['name'=>'tuhin','profession'=>'developer','company'=>'logic'];
print_r(array_change_key_case($multi,CASE_LOWER));
echo "<br/>";
echo "<br/>";

$multiDimention = [
    ['tuhin','tanvir','tomal','toha','tuba'],
    ['abir','aslam','afif','adnan','asif'],
    ['habib','harun','hasan','hasnat','hafiz'],
    ['rifat','ratul','rohan','rafin','rafsan']
];

foreach($multiDimention as $key=> $multi){ 
    echo "Row = $key <br/>";
    foreach($multi as $row =>$data){ 
        echo "Key = : $row Value = $data <br/>";
    }
}
echo "<br/>";
echo "<br/>";

$ma = [
    [
        'name'=>'Tuhin',
        'profession'=>'developer',
        'id' =>'1280674'
    ],
    [
        'name'=>'Nehal',
        'profession'=>'enginier',
        'id' =>'127865'
    ],
    [
        'name'=>'Munna',
        'profession'=>'App developer',
        'id' =>'123456'
    ],
    [
        'name'=>'Kabir khan',
        'profession'=>'Junior Developer',
        'id' =>'234455'
    ]
    ];

    $new = array_column($ma, 'name');
    print_r($new);

    echo "<br/>";
    echo "<br/>";

    $acount = ['tuhin','rafia','tuhin','a','bc','a','a'];
    $nc = array_count_values($acount);
    print_r($nc);

    echo "<br/>";
    echo "<br/>";

$adiff1 = ['orrange','banana','apple','pineapple'];
$adiff2 = ['orrange','banana','apple'];
$result = array_diff($adiff1,$adiff2);
print_r($result);    

echo "<br/>";
echo "<br/>";

function Cback ($item){ 
    return strlen($item);
}
$array = ['tuhin','nehal','munna','tasrif','sabbir'];
$lent = array_map("Cback",$array);
print_r($lent);

echo "<br/>";
echo "<br/>";

$carray = ['apple','banana','orrange','pineapple'];
$lent = array_map(function($item){return strlen($item);},$carray);
print_r($lent);




