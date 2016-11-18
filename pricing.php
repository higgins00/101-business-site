<?php include ('header.php');
      include('site-data.php');
?>

    <div class="row">
    	<?php

        	foreach ($price as $price_arr) {
        
        	?>
        <div class="col-4 col-m-12 price">
        	<h1 class="price__title-serif">
        		<?php echo $price_arr["title"]; ?>
        	</h1>
            <h2 class="price__title-bigPink">
            	<?php echo $price_arr["cost"]; ?>
            </h2>
            <h3 class="price__title-smallGray">4 Sessions</h3>
            <p class="price__txt">
            	<?php echo $price_arr["disc"]; ?>
            </p>
             <a class="btn btn--dark btn-space" href="book.php">Book an appointment</a>
        </div>

        <?php

        }
    ?>
    </div>


    <div class="row">
	    <div class="col-12 col-m-12">
	    	<div class="phoneNumber">
		    	<h1 class="subHeader">Call us now to book a relaxing massage session!</h1>
	    		
	    		
	  			<i class="fa fa-phone fa-2x icon icon_border"></i>

	  			<h2 class="subHeader price__phone">
	  				555-123-2322
	  			</h2>
	  			<h3  class="subHeader">Service Cost: $99.00</h3>
	  			<h4  class="subHeader">Duration: 1h 20m</h4>


	  		</div> 

	  	</div>
	</div>

	<div class="row quote__box">
	  	<div class="col-12 col-m-12">
	  		<h1 class="subHeader">What our happy customers say:</h1>
	  		<h2><i class="fa fa-quote-right  fa-2x icon" aria-hidden="true"></i></h2>
	  		<q>Men rarely acknowledge how much they love to get a massage&hellip; But I want to say, that without my afterwork Friday massage sessions here, my productivity wouldv't been so much lower&hellip;</q>
	  		<h3>Rhode Gentlebear</h3>
	  	</div>
	</div>

  	<div class="row">
	  	<h1 class="subHeader">See a full list of our massage service here:</h1>

	  	    <?php
	  	    shuffle($services);
        	$output = array_slice($services, 0, 3);
        	foreach ($output as $services_arr) {
        
        ?>

	  	<div class="col-4 col-m-12">
	  		<img class="img-circle" src="<?php echo $services_arr['pic']; ?>">
	  			<h3 class="subHeader"><?php echo $services_arr["title"]; ?></h3>
	  	</div>

	  	<?php } ?>

	  	<div class="col-12 col-m-12" align="center">
	  	<a class="btn btn--dark btn-space" href="services.php">See all Services</a>
	  	</div>

	  </div>






<?php include ('footer.php'); ?>