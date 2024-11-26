<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>second</title>
</head>
<body>
    <?php
    echo "Favourite Color Is " .$_SESSION['NAME']."<br/>";
    echo "Favourite Animal Is " .$_SESSION['PROFESSION']." ";
    ?>
</body>
</html>