<?php include('site-data.php'); ?>

<div class="footer">
    <div class="row row-footer">
        <div class="col-12 col-m-12">
            <img class="footer__Logo" src="Images/logo.png" >
        </div>
    </div>

    <div class="row line">
        
        <?php foreach($contact as $contact_arr) { ?>
            <div class="col-3 col-m-6 contact">
                <ul class="fa-ul">
                    <li><?php echo $contact_arr["icon"]; ?></li>
                    <li class="contact__title"><?php echo $contact_arr["title"]; ?></li>
                    <li><?php echo $contact_arr["info"]; ?></li>
                    <li><?php echo $contact_arr["info2"]; ?></li>
                </ul>
            </div>
        <?php } ?>
    </div>

    <div class="row copyright">
        <div class="col-12 col-m-12">
            <p class="copyright__txt">&copy; 2016 Fiona. 
            <a class="copyright__link" href="#">Privacy Policy</a>
            </p>
        </div>
    </div>
</div>