<?php

echo "use include while loop.php file in include&include-once file";
include 'while loop.php';


echo "<br><br>use include_once for loop.php file in include&include-once file";
include_once 'for loop.php';

echo "<br><br>use include_once for loop.php file in include&include-once file";
include_once 'for loop.php'; //not able to include because include once only include file once in another file it reduce the duplicates file
?>