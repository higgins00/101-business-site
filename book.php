<?php 
include ('header.php');
include ('calendar.php'); 

?>

<link href="./css/calendar.css" type="text/css" rel="stylesheet" />

<div class="booking">
<?php

$calendar = new Calendar();
 
echo $calendar->show();
?>

</div>


<?php include ('footer.php'); ?>
