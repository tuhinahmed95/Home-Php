<?php


$date = date_create("2024-11-4");
date_time_set($date, 12,40);
echo date_format($date, "y-m-d | H:i:s");