<?php
$conn = mysqli_connect("localhost","root","","practice");
if(isset($_GET['id'])){ 
    $getId   = $_GET['id'];

    $sql    = "SELECT * FROM student WHERE id = $getId";
    $query  = mysqli_query($conn,$sql);
    $data   = mysqli_fetch_assoc($query);
    $id     = $data['id'];
    $name   = $data['name'];
    $email  = $data['email'];
    $address= $data['address'];
}


if(isset($_POST['submit'])){ 
    $id = $_POST['id'];
    $name    =$_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql1 = "UPDATE student SET name ='$name', email ='$email', address ='$address' WHERE id = '$id' ";
    if(mysqli_query($conn,$sql1) == TRUE){ 
        header('location:view.php');
    }else{ 
        echo "data not update";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container"> 
        <div class="row"> 
            <div class="col-sm-3"></div>

            <div class="col-sm-6 mt-2 pt-2 border border-success">
                <h3>Update Registration Form</h3>
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST"> 
                    Name : <br>
                    <input type="text" name="name" value="<?php echo $name ?>"><br><br>
                    E-Mail : <br>
                    <input type="text" name="email" value="<?php echo $email ?>"><br><br>
                    Address : <br>
                    <input type="text" name="address" value="<?php echo $address ?>"><br><br>
                    <input type="text" name="id" value=" <?php echo $id ?> "hidden>
                    <input type="submit" name="submit" value="Edit" class="btn btn-success">
                </form>
            </div>

            <div class="col-sm-3"></div>
        </div>
    </div>
    
</body>
</html>