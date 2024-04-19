<?php
if(isset($_POST['btn'])){ 
    echo "ok";
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
    <fieldset style= width="60%" height="400px"> 
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
    </fieldset>
    
</body>
</html>