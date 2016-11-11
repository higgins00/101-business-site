<?php include ('header.php'); ?>
<?php

$employeePics = array(
    "./Images/masseurs-01.jpg",
    "./Images/masseurs-02.jpg",
    "./Images/masseurs-03.jpg",
    "./Images/masseurs-04.jpg"

    );




$employees = array(

        0 => array(
            // "pic" => "source"
            "name" =>"Mary Casserole",
            "title" => "Salon Owner",
            "bio" => "Mary founded the salon with her own principal capital, which earned by working at other  massage salons and saving money for her dream. It makes a statement about how powerful and independent individual she is! She is a strong believer in the healing and revitalizing power of the massage therapy&hellip;",
            "facebook" => "http://facebook.com/marycasserole",
            "twitter" => "http://twitter.com/marycasserole",
            "google" => "http://plus.google.com/u/0/+marycasserole"
            ),
        1 => array(
            "name" => "Elisa Grey",
            "title" => "Senior Masseur",
            "bio" => "Elsa's vast range of skills and knowledge lets her work with individuals seeking stress management and general relaxation&hellip; Her bag-of-tricks is filled with practical skills she applies to those therapeutic massages that we offer here.",
            "facebook" => "http://facebook.com/elsagrey",
            "twitter" => "http://twitter.com/elsagrey",
            "google" => "http://plus.google.com/u/0/+elsagray"
            ),
        2 => array(
            "name" => "Caroline Camile",
            "title" => "Senior Masseur",
            "bio" => "Her favorite massage techniques include the 'Deep Tissue Massage', 'Revitalizing Massage', and our all-time hit the full body 'Swedish Massage'… <br />
                Not even once any of our clients had any kinds of complaints about her massage sessions! Quite oppositly, Caroline has the most positive reviews of us all!",
            "facebook" => "http://facebook.com/ccamile",
            "twitter" => "http://twitter.com/ccamile",
            "google" => "http://plus.google.com/u/0/+ccamile"
            ),
    );

?>

    <h1 class="team__title">Salon&rsquor;s Team</h1>
    

    <?php

        foreach ($employees as $employees_arr) {
            # code...
        ?>
        
            <div class="col-3 col-m-12 team">
            <img class="team__img" src="Images/team/masseurs-02.jpg">
                <h2 class="team__title-header"><?php echo $employees_arr["name"]; ?></h2>
                <h3 class="team__title-subHeader"><?php echo $employees_arr["title"]; ?></h3>
                <p class="team__txt"><?php echo $employees_arr["bio"]; ?></p>
                <i class="fa fa-facebook icon social" aria-hidden="true"></i>
                <i class="fa fa-twitter icon social" aria-hidden="true"></i>
                <i class="fa fa-google-plus icon social" aria-hidden="true"></i>
            </div>

        <?php

        }
    ?>

        <!-- <div class="col-3 col-m-12 team">
        <img class="team__img" src="Images/team/masseurs-02.jpg">
            <h2 class="team__title-header">Elsa Grey</h2>
            <h3 class="team__title-subHeader">Senior Masseur</h3>
            <p class="team__txt">Elsa's vast range of skills and knowledge lets her work with individuals seeking stress management and general relaxation&hellip; Her bag-of-tricks is filled with practical skills she applies to those therapeutic massages that we offer here.</p>
            <i class="fa fa-facebook icon social" aria-hidden="true"></i>
            <i class="fa fa-twitter icon social" aria-hidden="true"></i>
            <i class="fa fa-google-plus icon social" aria-hidden="true"></i>
        </div>

        <div class="col-3 col-m-12 team">
            <img class="team__img" src="Images/team/masseurs-03.jpg">
            <h2 class="team__title-header">Caroline Camile</h2>
            <h3 class="team__title-subHeader">Senior Masseur</h3>
            <p class="team__txt">Her favorite massage techniques include the "Deep Tissue Massage"; "Revitalizing Massage" and our all-time hit the full body "Swedish Massage"&hellip;</p>
            <p class="team__txt">Not even once any of our clients had any kinds of complaints about her massage sessions! Quite oppositly, Caroline has the most positive reviews of us all!</p>
            <i class="fa fa-facebook icon social" aria-hidden="true"></i>
            <i class="fa fa-twitter icon social" aria-hidden="true"></i>
            <i class="fa fa-google-plus icon social" aria-hidden="true"></i>
        </div>

        <div class="col-3 col-m-12 team">
            <img class="team__img" src="Images/team/masseurs-04.jpg">
            <h2 class="team__title-header">Kimberly Boyle</h2>
            <h3 class="team__title-subHeader">Junior Masseur</h3>
            <p class="team__txt">Being 24 years old, Kimberly is very knowledgeable and moves on providing a top-notch type of relaxing massage, according to the highest standards, in a pleasant surrounding. It makes her one of our most valuable team members ever, despite her young age!</p>
            <i class="fa fa-facebook icon social" aria-hidden="true"></i>
            <i class="fa fa-twitter icon social" aria-hidden="true"></i>
            <i class="fa fa-google-plus icon social" aria-hidden="true"></i>
        </div> -->
    </div>

    <h1 class="subHeader">Contact us</h1>
    <div class="row form">

        <div class="col-12 col-m-12">
            <form class="contactForm">
                <div class="contactHalf">
                    <label class="contactForm__label" for="name">Your name *</label>
                    <input class="contactForm__box" type="text" name="form_name" id="name">
                </div>

                <div class="contactHalf">
                    <label class="contactForm__label" for="subject">Subject</label>
                    <input class="contactForm__box" type="text" name="form_subject" id="subject">
                </div>

                <label class="contactForm__label" for="email">Email address *</label>
                <input class="contactForm__box"  type="email" name="form_email" id="email">

                <label class="contactForm__label">Your message *</label>
                <textarea class="contactForm__box contactForm__box-txt"></textarea>

                <input class="btn btn-dark btn__space" type="submit" value="Send">
            </form>
        </div>
    </div>
</div>

<?php include ('footer.php'); ?>