<?php include ('header.php');
      include('site-data.php');
?> 

 <div class="row">
    <div class="contact__wrapper">
        <div class="col-3 col-m-12 findUs">
        
            <h1 class="subHeader">Find Us</h1>

           
            <?php 
            $contact = array('2' => $contact['2']) + $contact;

            foreach($contact as $contact_arr) { ?>
                <ul class="fa-ul">
                    <li><?php echo $contact_arr["icon"]; ?></li>
                    <li class="findUs__title"><?php echo $contact_arr["title"]; ?></li>
                    <li class="findUs__txt"><?php echo $contact_arr["info"]; ?></li>
                    <li class="findUs__txt"><?php echo $contact_arr["info2"]; ?></li>
                </ul>
            <?php } ?>
            
            <ul>
                <li><a class="btn btn--dark btn-space" href="book.php">Book an appointment</a></li>
            </ul>
        </div>
    
        <div class="col-8 col-m-12">
            <h1 class="subHeader">Get in touch with us</h1>

            <?php include ('mail.php') ?>

            
        </div>
    </div>
</div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.491588968004!2d-87.63014980198378!3d41.90357154229802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fd34fdf5d403d%3A0x96e3e65943066c26!2s1163+N+State+St%2C+Chicago%2C+IL+60610!5e0!3m2!1sen!2sus!4v1478564711680" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

<?php include ('footer.php') ?>