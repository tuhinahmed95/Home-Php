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
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

   <div class="container"> 
    <div class="row"> 
        <div class="col-sm-3">
        </div>

        <div class="col-sm-6"> 

        <h1>Registration Form</h1>

        <form action="insert.php" method="POST"> 
       
        ID <br>
        <input type="text" name="id"><br><br>
        NAME <br>
        <input type="text" name="name"><br><br>
        EMAIL <br>
        <input type="email" name="email"><br><br>
        AC NUMBER <br>
        <input type="text" name="acnu"><br><br>

        <input type="submit" name="btn" value="submit">
    </form>

        </div>

        <div class="col-sm-3"> 
        </div>
    </div>
   </div>
    
</body>
</html>