<?php

$fptr = fopen("file.txt","r");

if(!$fptr){ 
    die ("this is blank,please enter valid file name");
}

$content = fread($fptr,filesize("file.txt"));
fclose ($fptr);
echo $content;

?>