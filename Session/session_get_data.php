<?php 

// start the session and get data
session_start();

    echo "Your Name Is ". $_SESSION['userName'];
    echo "<br>Your Favourite Game Is ". $_SESSION['favCat'];
    echo "<br> Your Favourite Player is ". $_SESSION['favPlyer'];






?>