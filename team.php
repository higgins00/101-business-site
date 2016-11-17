<?php include ('header.php');
      include('site-data.php');
?>

    <h1 class="team__title">Salon&rsquor;s Team</h1>
    
    <div class="row">
    <?php

        foreach ($employees as $employees_arr) {
        
        ?>

            <div class="col-3 col-m-12 team">
            <img class="team__img" src="<?php echo $employees_arr['pic']; ?>">
                <h2 class="team__title-header"><?php echo $employees_arr["name"]; ?></h2>
                <h3 class="team__title-subHeader"><?php echo $employees_arr["title"]; ?></h3>
                <p class="team__txt"><?php echo $employees_arr["bio"]; ?></p>
                <a href="<?php echo $employees_arr['facebook']; ?>">
                    <i class="fa fa-facebook icon social" aria-hidden="true"></i>
                </a>
                <a href="<?php echo $employees_arr['twitter']; ?>">
                    <i class="fa fa-twitter icon social" aria-hidden="true"></i>
                </a>
                <a href="<?php echo $employees_arr['google']; ?>">
                    <i class="fa fa-google-plus icon social" aria-hidden="true"></i>
                </a>
            </div>

        <?php

        }
    ?>
</div>


    <h1 class="subHeader">Contact us</h1>
    <div class="row form">

        <div class="col-12 col-m-12">
            <?php include ('mail.php') ?>
        </div>
    </div>

<?php include ('footer.php'); ?>