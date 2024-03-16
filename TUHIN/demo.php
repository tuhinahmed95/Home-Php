<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center> 
        <h1>this is a from</h1>
     Id :   <input type="number" name = "txtid"><br><br>
    Name : <input type="text" name = "name"><br><br>
    Email : <input type="emial" name ="email"><br><br>
    Phone : <input type="number" name ="phn"><br><br>
            <input type="submit" name ="sunmit" value ="submit">
            <button><a href="logout.php">logout</a></button>
            <button><a href="file_upload.php">upload</a></button>
    </center>
    
</body>
</html>

<?php
        session_start();
    if(!isset($_SESSION['fname'])){ 
        header("location:login.php");
    }
?>