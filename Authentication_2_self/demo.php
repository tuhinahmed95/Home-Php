<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>this is a form</h1>
    <form action="#" method = "post"> 
      ID :  <input type="number" name = "txtid"><br><br>
      NAME :  <input type="text" name = "txtname"><br><br>
     EMAIL :   <input type="text" name = "email"><br><br>
     PHONE :   <input type="number" name = "phnnum"><br><br>

        <input type="submit" name = "submit" value = "submit">
        <button><a href="logout.php">logout</a></button>
    </form>
    
</body>
</html>

<?php
session_start();
if(!isset($_SESSION["fname"])){ 
    header("location:login.php");
}

?>