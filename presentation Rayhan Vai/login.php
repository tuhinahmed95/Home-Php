<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <center> 
        <form action="#" method="post"> 
            <input type="text" name="user"><br><br>
            <input type="password" name="password"><br><br>
            <input type="submit" name="btn" vlaue="submit">
        </form>
    </center>
    
</body>
</html>

<?php

session_start();
if(isset($_POST['btn'])){ 
    $user_name = $_POST['user'];
    $password = $_POST['password'];

    if($user_name =="tuhin" && $password =="12345"){ 
        $_SESSION['fname']=$user_name;
        header("location:demo.php");
    }
    else{ 
      $msg = "username or password is not corredt";
    }
}


?>

<?php
echo isset($msg)?$msg:"";

?>

