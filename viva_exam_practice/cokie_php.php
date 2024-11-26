


<?php
$c_name = 'Cookie_Name'; // কুকির নাম
$c_value = "Cookie_Value"; // কুকির মান
setcookie($c_name, $c_value, time() + (86400 * 30), "/"); // কুকি সেট করা (৩০ দিনের জন্য)
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
    // কুকি চেক করা হচ্ছে
    if (!isset($_COOKIE[$c_name])) { 
        echo "Cookie '$c_name' is not set.";
    } else { 
        echo "Cookie '$c_name' is set.<br>";
        echo "Value: " . $_COOKIE[$c_name];
    }
    ?>
</body>
</html>
