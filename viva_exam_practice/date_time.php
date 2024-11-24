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
echo "<br/>";
echo "this is a date & time = " . date('h/i/s');
echo "<br/>";
date_default_timezone_set("america/new_york");
echo "The time is = " . date("h/i/sa");
echo "<br/>";

$d = mktime(11,34,5,20,11,2010);
echo "This is a time = " . date("y/m/d h:i:sa",$d);
echo "<br/>";
$time = strtotime("10.10pm april 15 2012");
echo "this is a previous time = " . date("y-m-d h:i:sa",$time);
echo "<br/>";
$d = strtotime("tomrrow");
$d = strtotime("next friday");
$d = strtotime("+3 month");
echo "this is a current date = " . date("y-m-d h:i:sa",$d);
echo "<br/>";
$cname = "cokkiename";
$cvalue = "cokkieValue";
setcookie($cname,$cvalue,time()+("3000*30"),"/");

// setcookie("cname","cvalue", time()+3000, "/");














