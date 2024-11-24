<?php


// $date = date_create("2024-11-4");
// date_time_set($date, 12,40);
// echo date_format($date, "y-m-d | H:i:s"); 
// echo"<br/>";
// echo date_default_timezone_get();

echo "PHP_SELF :" . $_SERVER['PHP_SELF']."<br>";
echo "SERVER_NAME". $_SERVER['SERVER_NAME']."<br>";
echo "HTTP_HOST". $_SERVER['HTTP_HOST']."<br>";
echo "REQUEST_METHOD".$_SERVER['REQUEST_METHOD']."<br>";

echo "<br/><br/>";
echo "Today is = ". date("y/m/d");
echo "<br/>";
echo "Current Year = ". date("Y");
echo "<br/>";
echo "Today = ". date("d");
echo "<br/>";
echo "Current Month = ".date("m");
echo "<br/>";
echo "Current day = ".date("d");