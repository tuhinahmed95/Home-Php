<?php
//this is connet to mysql

$databaseHost = 'localhost';
$databaseName = 'college';
$databaseUsername = 'root';
$databasePassword = '';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 