<?php
    $cokie_name = "user";
    $cokie_value = "Tuhin Ahmed";

    setcookie($cokie_name, $cokie_value, time()+ (3600), '/');

    

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
    if(!isset($_COOKIE[$cokie_name])){ 
        echo "Cokie is not set";
    }else{ 
        echo $_COOKIE[$cokie_name];
    }
    ?>
    
</body>
</html>