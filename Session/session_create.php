<?php

// Used to manage information accross diferent pages

// Veryfiy the user login info


session_start();
$_SESSION['userName']='Tuhin';
$_SESSION['favCat']='Cricket';
$_SESSION['favPlyer']='ViratKohli';
echo "You have saved your session";

?>