<?php include ('header.php');
      include('site-data.php');
?>

<div class="row">

    <?php
        $output = array_slice($services, 0, 3);
        foreach ($output as $services_arr) { ?>

        <div class="col-4 col-m-12 service">

            <img class="services__img" src="<?php echo $services_arr['pic']; ?>">
            <h2 class="services__title">
                <?php echo $services_arr["title"]; ?>
            </h2>
            <p class="services__txt">
                <?php echo $services_arr["disc"]; ?>
            </p>
        </div>

    <?php } ?>

    <div class="col-12 col-m-12 line"></div>

</div>

<div class="row">

    <?php
        $output = array_slice($services, 3, 5);
        foreach ($output as $services_arr) { ?>

        <div class="col-4 col-m-12 service">

            <img class="services__img" src="<?php echo $services_arr['pic']; ?>">
            <h2 class="services__title">
                <?php echo $services_arr["title"]; ?>
            </h2>
            <p class="services__txt">
                <?php echo $services_arr["disc"]; ?>
            </p>
        </div>

    <?php } ?>

</div>

<?php include ('footer.php'); ?>