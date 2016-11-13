<?php 
include ('header.php');
include ('calendar.php'); 

?>

<link href="./css/calendar.css" type="text/css" rel="stylesheet" />


<?php

$calendar = new Calendar();
 
echo $calendar->show();

include ('footer.php'); ?>
