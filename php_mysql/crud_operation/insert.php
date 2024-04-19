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




     
       
       

         

       