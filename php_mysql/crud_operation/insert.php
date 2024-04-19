<?php

$connectDB = mysqli_connect ("localhost","root","","bank");

if(isset($_POST['btn'])){ 
    $id    = $_POST['id'];
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $acnum = $_POST['acnu'];
    
    
    $sql = "INSERT INTO customer(id,name,email,acnumber) VALUES ('$id','$name','$email','$acnum')";

    if(mysqli_query($connectDB,$sql) == TRUE){ 
        echo "Data Inserted Succesfully";
        header("location:insert.php");
    }
    else{ 
        echo "Data Is Not Inserted";
    }
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="insert.php"> 
        <label for="id">ID 
            <input type="text" name="id"><br><br>
        </label><br>

        <label for="name">NAME 
            <input type="text" name="name"><br><br>
        </label><br><br>

        <label for="email">Email 
            <input type="email" name="email"><br><br>
        </label><br>

        <label for="acnu">AC Number 
            <input type="text" name="acnu"><br><br>
        </label><br>

        <input type="submit" name="btn" value="submit">
    </form>
    
</body>
</html>