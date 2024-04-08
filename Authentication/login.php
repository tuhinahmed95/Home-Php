<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authentication</title>
</head>
<body>

  <div>
    <center>
      <h1>This IS A Home Page</h1>
      <form action="#" method = "post"> 
        <input type="text" name ="username"><br><br>
        <input type="number" name ="password"><br><br>
        <input type="submit" name ="btn" value ="submit">
      </form>
    </center>

  </div>
  
</body>
</html>
//this is a login page

<?php

session_start();
if(isset($_POST['btn'])){ 
  $userName = $_POST['username'];
  $passWord = $_POST['password'];

  if($userName=="Tuhin" && $passWord=="09876"){ 
    $_SESSION ['suppos']=$userName;
    header("location:demo.php");
  }
  else{ 
    $messege = "username or password is not correct";
  }
}

?>

<?php
  echo isset($messege)?$messege:"";
?>