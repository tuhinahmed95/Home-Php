<?php

// Used to manage information accross diferent pages

// Veryfiy the user login info
//this is session start

session_start();
$_SESSION['userName']='Tuhin';
$_SESSION['favCat']='Cricket';
$_SESSION['favPlyer']='ViratKohli';
echo "You have saved your session";

?>