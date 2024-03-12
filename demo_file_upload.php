<body>
    <form action="#" method="POST" enctype="multipart/from-data">
        <input type="file" name="myfile"><br><br>
        <input type="submit" name="submit" value ="Upload File">
    </form>
    <?php
    if(isset($_POST["submit"])){ 
        echo "<image src='$newfolder/$fileName' width='400px'>";
    }

    ?>
</body>

<?php

if(isset($_POST["submit"])){ 
    $fileName = $_FILES["myfile"]["name"];
    $tmpName = $_FILES["myfile"]["tmp_name"];
    $newfolder = "/images";
    if(!empty($fileName)){ 
        move_uploaded_file($tmpName,$newfolder.$fileName);

    }
    else{ 
        echo "please select your file";
    }
}


?>