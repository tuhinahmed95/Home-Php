<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<center> 
    <h1>This Is My From</h1>
    <form action="#" method="post"> 
        Id : <input type="text" name="txtid"><br><br>
        Name : <input type="text" name="txtname"><br><br>
        Email : <input type="emil" name="email"><br><br>
        Phone : <input type="number" name="phn"><br><br>
        <input type="submit" name="btn" value="submit">
        <button><a href="logout.php">logout</a></button>
        <button><a href="file_upload.php">Upload</a></button>
    </form>
</center>
    
</body>
</html>

<?php

session_start();
if(!isset($_SESSION['fname'])){ 
    header("location:login.php");
}


?>