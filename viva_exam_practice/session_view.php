<?php
session_start();

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

    if(isset($_SESSION['favcol'])){ 
        echo "session is view now".$_SESSION['favcol'];
    }else{ 
        echo "session is not set";
    }

    ?>
</body>
</html>