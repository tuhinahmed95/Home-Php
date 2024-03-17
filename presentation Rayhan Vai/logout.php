<?php
session_start();
unset($_SESSION['fname']);
session_destroy();
header("location:login.php");

?>