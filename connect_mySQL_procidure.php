<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "college";

$conn = mysqli_connect($servername,$username,$password,$db_name);
if(!$conn){ 
    die("connect failed".$conn);
}
echo "connect succesfully";

?>