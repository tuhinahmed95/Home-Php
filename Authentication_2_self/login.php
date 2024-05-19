<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
 

</head>
<body>
    <!-- Authentication -->
    <div class="container">
        <center> 
            <div class="login-form">
                <fieldset class="field">
            <h1>Login</h1>
            <form action="#" method = "post"> 
                Username <br>
                <input type="text" name ="username"><br><br>
                Password <br>
                <input type="password" name = "password"><br><br>
                <input type="submit" class="btn" name ="btnsubmit" value ="login">
            </form>
            </fieldset>
            </div>
        </center>
        
    </div>
    
</body>
</html>



<?php


session_start();

if(isset($_POST['btnsubmit'])){ 
    $user_name = $_POST['username'];
    $pass_word = $_POST['password'];

    if($user_name=="syntax" && $pass_word=="12345"){ 
        $_SESSION['syntax']=$user_name;
        header("location:demo.php");
    }
    else{ 
        $messege="username or password is not correct";
    }
}


?>

<?php
echo isset($messege)?$messege:"";
?>
