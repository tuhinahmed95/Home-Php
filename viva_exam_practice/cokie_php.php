
<?php
$c_name = "Cookie_Name";
$c_value = "Cookie_Value";

setcookie($c_name,$c_value,time()+ (86400 * 30), "/");
setcookie('user', "",time()-3600);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE[$c_name])){ 
        echo "Cookie Name'". $c_name ." 'is Not set";
    }else{ 
        echo "Cookie '". $c_name . "'Is Set";
        echo "Value ". $_COOKIE[$c_name];
    }

    echo "<br/>";

    setcookie('user','set_cokie',time()+3600);
    if(count($_COOKIE)>0){ 
        echo "cookie is enable";
    }else{ 
        echo "cookie is disable";
    }

    echo "<br/>";
    echo "user is deleted"
    
    ?>


</body>
</html>



