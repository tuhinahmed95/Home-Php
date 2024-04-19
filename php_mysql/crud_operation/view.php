<?php

$connectDB = mysqli_connect ("localhost","root","","bank");
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

        <div class="col-sm-6 pt-4 mt-3 border border-success"> 

        <?php 
            $sql= "SELECT * FROM customer";
            $query= mysqli_query($connectDB,$sql);

            echo" <table class='table table-success'> 
            
                       <tr> 
                       <th>Id</th>
                       <th>Name</th> 
                       <th>Email</th>
                       <th>Ac Number</th>
                       <th>Action</th>
                       </tr>" ;
            while($data = mysqli_fetch_assoc($query)){ 

             $id     = $data['id'];
             $name     = $data['name'];
             $email     = $data['email'];
             $acnumber     = $data['acnu'];

             echo "<tr> 
                        <td>$id</td>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$acnumber</td>
                        <td><span class='btn btn-success'>Edit</span> 
                        <span class='btn btn-danger'>Delete</span>
                        </td>
             
                  </tr>";
                
               
        
        ?>
        </div>
       

        <div class="col-sm-3"> 
        </div>
    </div>
   </div>
    
</body>
</html>