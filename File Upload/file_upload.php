<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post" enctype = "multipart/form-data"> 
        <input type="file" name ="fname"><br><br>
        <input type="submit" name ="submit">
    </form>
    
</body>
</html>

<?php
echo "<pre>"; 
    print_r($_FILES);
echo"</pre>";

if(isset($_POST['submit'])){ 
    $file_name = $_FILES['fname'];
    $tmp_name = $_FILES['fname']['tmp_name'];
    $file_size = $_FILES['fname']['size'];
    $folder = "images/";
    $kb = $file_size/1024;

    if($kb>400){ 
        echo "file is too large";
    }
    else{ 
        move_uploaded_file($tmp_name,$folder.$file_name);
        echo "succesfully";
    }
}
?>
<?php
if(isset($_FILES['file_name'])){ 
    echo "<img src '$folder/$file_name' width='300px'>";
}
