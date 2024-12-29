<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Hello</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      Name :  <input type="text" name="fname"><br><br>
      Age  : <input type="number" name="age"><br><br>
      Email  : <input type="email" name="email"><br><br>
      <input type="submit" name="save">
    </form>
</body>
</html>

<?php

if(isset($_POST['save'])){ 
  echo $_POST['fname']."<br>";
  echo $_POST['age'];
}

?>