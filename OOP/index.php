<?php 

require_once("class_oop.php");

if(isset($_POST["submit"])){ 
    $fid = $_POST["id"];
    $fname = $_POST["name"];
    $adrs = $_POST["address"];

    $sow_view = new Information($_id,$_name,$_address);
    $sow_view->show();
    echo "complete";
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

    <form action="#" method = "post">  
        <fieldset> 
            <legend>User Information</legend>

          ID :  <input type="text" name ="id"><br><br>
          NAME :  <input type="text" name ="name"><br><br>
          ADDRESS :  <input type="text" name ="address"><br><br>
        
            <input type="submit" name = "submit">
        </fieldset>
    </form>

    <?php  

    Information::show_info();
    
    ?>
    
</body>
</html>