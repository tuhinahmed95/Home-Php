<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>
    <center> 
        <form action="#" method = "post" enctype = "multipart/form-data"> 
            <input type="file" name = "fileup">
            <input type="submit" name ="btn" value ="submit">
        </form>
    </center>
    
</body>
</html>

<?php

if(isset($_POST['btn'])){ 
    $file_name = $_FILES['fileup']['name'];
    $tmp_name = $_FILES['fileup']['tmp_name'];
    $file_size = $_FILES['fileup']['size'];
    $folder = "images/";
    $kb = $file_size/1024;

    if(empty($tmp_name)){ 
        echo "please select a file";
    }
    elseif($kb>400){ 
        echo "file is too large";
    }
    else{ 
        $upload = move_uploaded_file($tmp_name,$folder.$file_name);
    }   
}
?>
    
<?php
        //display the upload image

    if(isset($upload)){ 
        echo "<h1>File Upload Succesfully</h1>";
        echo "<img src='$folder/$file_name' width='300px' >";
    }
?>