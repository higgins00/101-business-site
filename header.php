<?php
  function active($currect_page){
    $url_array =  explode('/',$_SERVER['PHP_SELF']) ;
    $url = end($url_array);  
  if($currect_page == $url){
      echo "topNav--Active"; //class name in css
  } else {
    echo "topNav__Link";
  } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="stylesheet" type="text/css" href="./css/font-awesome.css">
  <script type="text/javascript" src="topNav.js"></script>
  <title>Fiona Massage Salon</title>

</head>
<body>

  <!-- This section is for the navigation-->

  <div class="header">
      <ul class="topNav" id="myTopnav">

          <li>
            <img class="topNav__Logo" src="Images/logo.png">
          </li>
          <li>
            <a class="<?php active('index.php');?>" href="index.php">Home</a>
          </li>
          <li>
            <a class="<?php active('prices.php');?>" href="prices.php">Pricing</a>
          </li>
          <li> 
            <a class="<?php active('team.php');?>" href="team.php">Masseurs</a>
          </li>
          <li>
            <a class="<?php active('services.php');?>" href="services.php">Services</a>
          </li>
          <li>
            <a class="<?php active('contacts.php');?>" href="contacts.php">Contacts</a>
          </li>
          <li>
            <a class="btn topNav__btn" href="book.php">Book an appointment</a>
          </li>
          <!-- <li class="topNav__icon">
              <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
          </li> -->
      </ul>
  </div>