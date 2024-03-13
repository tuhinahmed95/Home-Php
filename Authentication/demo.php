<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style> 
  div{ 
    width: 300px;
    height:300px;
    background-color:
  }

</style>
</head>
<body>
  <center> 
    <h1>This Is A Form</h1>
    ID :<input type="number" name ="txtid"><br><br>
    Name : <input type="text" name ="txtname"><br><br>
    Email : <input type="email" name ="email"><br><br>
    Phone : <input type="number" name ="phn"><br><br>
    <input type="submit" name ="submit" value ="submit">
    <button><a href="logout.php">logout</a></button>
  </center>
  
</body>
</html>

<?php

session_start();
if(!isset($_SESSION['suppos'])){ 
  header("location:login.php");
}

?>