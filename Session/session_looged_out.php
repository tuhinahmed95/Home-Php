<?php

// Used to manage information accross diferent pages

// Veryfiy the user login info

session_start();
session_unset();
session_destroy();
echo "You have been logged out";

?>