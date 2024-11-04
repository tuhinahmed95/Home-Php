<?php

    session_start();
    $_SESSION['favcol'] = "skyblue";

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>start</title>
</head>
<body>
    <?php
        if(isset($_SESSION['faccol'])){ 
            echo "session is set now".$_SESSION['favcol'];
        }else{ 
            echo "session is not set";
        }

    ?>
</body>
</html>