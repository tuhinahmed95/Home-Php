<?php
$connectDB = mysqli_connect("localhost","root","","college");
if(isset($_POST['btn'])){ 
    $id   =      $_POST['id'];
    $name = $_POST['name'];
     $roll =    $_POST['roll'];
    $email=   $_POST['email'];
    $city =   $_POST['city'];

    $sql = "INSERT INTO student(id,name,roll,email,city) VALUES('$id','$name','$roll','$email','$city')";

    if(mysqli_query($connectDB,$sql) == TRUE){ 
        echo "Data Inserted Succesfull";
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
    <title>Crud Operation</title>
</head>
<body>
    
        <legend>Student Registration Form</legend>
    <form action="insert.php" method="POST" style=width="60%" height="400px">  
        ID <br>
        <input type="text" name="id"><br><br>
        NAME <br>
        <input type="text" name="name"><br><br>
        ROLL <br>
        <input type="text" name="roll"><br><br>
        EMAIL <br>
        <input type="email" name="email"><br><br>
        CITY <br>
        <input type="text" name="city"><br><br>
        <input type="submit" name="btn" value="submit">
    </form>
  
    
</body>
</html>