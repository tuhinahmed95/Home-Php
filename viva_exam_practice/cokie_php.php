

<?php
$c_name = 'Cookie Name';
$c_value = "cookie Value";
setcookie($c_name,$c_value,time()+ (86400 * 30),"/");
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
        echo "Cookie Name " .$c_name. "Cookie Is Not Set";
    }else{ 
        echo "Cookie is".$c_name . "Set";
        echo "Value " .$_COOKIE[$c_name] . "Is Set";
    }
    ?>
</body>
</html>