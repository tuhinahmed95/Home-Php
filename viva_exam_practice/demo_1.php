<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first</title>
</head>
<body>
    <?php
        $_SESSION['NAME']="TUHIN";
        $_SESSION['PROFESSION']="SENIOR DEVELOPER";
        echo "SESSION VARIABLE IS SET NOW";

        
    ?>
</body>
</html>