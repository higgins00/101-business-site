<?php include ('header.php');
      include ('site-data.php');
?>

<div class="home__header">
    <h1 class="homeHeader__text">Highly customized upscale massage for your pleasure</h1>
    <h5>Call us for help and set up yourself a massage session, that will be relaxing both for your body and for your spirit!</h5>
</div>
<div class="reason">
    <?php foreach ($reason as $reason_arr) { ?>

        <div class="col-4 col-m-12 reason__box">
            <h2 class="reason__title"><?php echo $reason_arr["title"]; ?></h2>
            <p class="reason__txt"><?php echo $reason_arr["about"]; ?></p>
        </div>

    <?php } ?>
</div>

<div class="home__subHeader"></div>

<div class="row">
	<h1 class="subHeader">See a full list of our massage service here:</h1>

	<?php
	  	shuffle($services);
        $output = array_slice($services, 0, 3);
        foreach ($output as $services_arr) { ?>

	  	<div class="col-4 col-m-12">
	  		<img class="img-circle" src="<?php echo $services_arr['pic']; ?>">
	  		<h3 class="subHeader"><?php echo $services_arr["title"]; ?></h3>
	  	</div>
    <?php } ?>

	<div class="col-12 col-m-12" align="center">
	  	<a class="btn btn--light btn-space" href="services.php">See all Services</a>
	</div>

</div>

<?php include ('footer.php') ?>