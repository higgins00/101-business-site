<?php
  function active($currect_page){
    $url_array =  explode('/',$_SERVER['PHP_SELF']) ;
    $url = end($url_array);  
  if($currect_page == $url){
      echo "nav__Link--Active"; //class name in css
  } else {
    echo "nav__Link";
  } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="stylesheet" type="text/css" href="./css/grid.css">
  <link rel="stylesheet" type="text/css" href="./css/font-awesome.css">
  <title>Fiona Massage Salon</title>

</head>
<body>

  <!-- This section is for the navigation-->

  <div class="nav_Shadow">
      <ul class="nav">

          <li class="nav__Item">
            <img class="nav__Logo" src="Images/logo.png">
          </li>
          <li class="nav__Item">
            <a class="<?php active('index.php');?>" href="index.php">Home</a>
          </li>
          <li class="nav__Item">
            <a class="<?php active('pricing.php');?>" href="pricing.php">Pricing</a>
          </li>
          <li class="nav__Item"> 
            <a class="<?php active('team.php');?>" href="team.php">Masseurs</a>
          </li>
          <li class="nav__Item">
            <a class="<?php active('services.php');?>" href="services.php">Services</a>
          </li>
          <li class="nav__Item">
            <a class="<?php active('contact.php');?>" href="contact.php">Contacts</a>
          </li>
          <li class="nav__Item">
            <a class="btn btn--dark" href="book.php">Book an appointment</a>
          </li>
      </ul>
  </div>