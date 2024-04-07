<?php
//this is the way to connect system
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "college";

$conn = new mysqli($server_name,$user_name,$password,$db_name);

if($conn->connect_error){ 
    die("connect failed".$conn->connect_error);
}
echo "connect succesfully";

?>