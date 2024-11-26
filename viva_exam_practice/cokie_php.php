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

?>