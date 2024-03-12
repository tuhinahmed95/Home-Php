<?php

$a = readfile("myFiles.txt");
echo $a;
echo "<br>";

$fptr = fopen("myFile.txt", "r");
echo $fptr;



?>