<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="#" method = "post" enctype="multipart/form-data"> 
        <input type="file" name="filename">
        <input type="submit" name = "submit">
    </form>
    
</body>
</html>


<?php

    //echo "<pre>";
    //    print_r($_FILES);
  //  echo  "</pre>";


if(isset($_FILES['filename'])){ 
    $file_name = $_FILES['filename']['name'];
    $tmp_name = $_FILES['filename']['tmp_name'];
    // $file_type = $_FILES['filename']['type'];
     $file_size = $_FILES['filename']['size'];
    $folder = "images/"; 
    $kb = $file_size/1024;

    

    if($kb>400){ 
        echo "File is too large";
    }
    else{ 
        move_uploaded_file( $tmp_name,$folder.$file_name);
        echo "Succesfully";

    }
   
}

?>

<?php

if(isset($_FILES['filename'])){ 
    echo "<image src='$folder/$file_name' width='300px'>";
}

?> 