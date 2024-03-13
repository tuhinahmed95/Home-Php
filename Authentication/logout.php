<?php
session_start();
unset($_SESSION['suppos']);
session_destroy();
header("location:login.php");


?>