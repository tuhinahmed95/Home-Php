
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
    <center>
   
        <div class="sub-form demoField">
        <fieldset class="field "> 
        <h1>Registration Form</h1>
        <form action="#" method ="post"> 
          Id <br>
          <input type="text" name = "txtid"><br><br>
          Name  <br>
         <input type="text" name = "txtname"><br><br>
          Email  <br>
          <input type="text" name = "email"><br><br>
          Phone  <br>
          <input type="number" name ="phn"><br><br>
         <input type="submit" name ="submit" value ="submit">
         <button><a href="logout.php">logout</a></button>
        </form>
        
        </fieldset>
        </div>
        
    </center>
    </div>
    
</body>
</html>

<?php

session_start();

if(!isset($_SESSION['syntax'])){ 
    header("location:login.php");
}


?>