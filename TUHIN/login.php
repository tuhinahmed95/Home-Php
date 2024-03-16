<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
</head>
<body>

<center> 
    <h1>Welcome To My Home Page</h1>

    <form action="#" method = "post"> 
        <input type="text" name ="username"><br><br>
        <input type="password" name = "password"><br><br>
        <input type="submit" name ="btn" value = "submit">
    </form>
</center>
    
</body>
</html>

<?php
session_start();
if(isset($_POST['btn'])){ 
    $user_name = $_POST['username'];
    $pass_word = $_POST['password'];

    if($user_name =="tuhin" && $pass_word =="123"){ 
        $_SESSION['fname']=$user_name;
        header("location:demo.php");
    }
    else{ 
        $msg = "username or password incorrect";
    }
}


?>

<?php
echo isset($msg)?$msg:"";

?>