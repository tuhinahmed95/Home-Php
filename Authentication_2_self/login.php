<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome To My Home Page</h1>
    
    <form action="#" method = "POST"> 
      Username :  <input type="text" name ="textname"><br><br>
      Password :  <input type="password" name = "txtpass"><br><br>
        <input type="submit" name="submit" value = "login">
    </form>

    
</body>
</html>



<?php
session_start();
if(isset($_POST["submit"])){ 
    $username = $_POST["textname"];
    $password = $_POST["txtpass"];

    if($username=="admin" && $password=="12345"){ 
        $_SESSION["fname"]=$username;
        header("location:demo.php");
    }
    else { 
        $msg = "username and password is incorect";
    }
}
    



?>

    <?php
        echo isset ($msg)? $msg:"";
    ?>
    