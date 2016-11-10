<?php include ('header.php'); ?>

 <div class="row">
    <div class="contact__wrapper">
        <div class="col-3 col-m-12 find">
        <h1 class="contact__head">Find Us</h1>
           
            <ul class="fa-ul">
                <li>
                    <i class="fa-li fa fa-phone icon fa-lg" aria-hidden="true"></i>
                    <h4 class="contact__title">Call Today:</h4>
                </li>
                <li>555-123-5353</li>
                <li>555-12-2323</li>
            </ul>

            <ul class="fa-ul">
                <li>
                    <i class="fa-li fa fa-envelope-o icon fa-lg" aria-hidden="true"></i>
                    <h4 class="contact__title">Email:</h4>
                </li>
                <li>
                    <a class="contact__link" href="mailto:info@demolink">info@demolink</a>
                </li>
            </ul>

            <ul class="fa-ul">
                <li>
                    <i class="fa-li fa fa-map-o icon fa-lg" aria-hidden="true"></i>
                    <h4 class="contact__title">Address:</h4>
                </li>
                <li class="contact_txt">1163 N State St, Chicago</li>
                <li>IL 60610, United States</li>
            </ul>
    
            <ul class="fa-ul">
                <li>
                    <i class="fa-li fa fa-clock-o icon fa-lg" aria-hidden="true"></i>
                    <h4 class="contact__title">Opening Hours:</h4>
                </li>
                <li>Mon-Fri: 9ampm-6pm;</li>
                <li>Sun: 10am-1pm</li>
            </ul>
            <ul>
                <li>
                    <a class="btn topNav__btn" href="book.php">Book an appointment</a>
                </li>
            </ul>
        </div>
    
        <div class="col-8 col-m-12">
            <h1 class="form__title">Get in touch with us</h1>

            <form method="post" action="contactengine.php">

                <div class="contact_half">
                    <label for="Name">Your name *</label>
                    <input class="form__box" type="text" name="form_name" id="Name">
                </div>

                <div class="contact_half">
                    <label for="Subject">Subject</label>
                    <input class="form__box" type="text" name="form_subject" id="Subject">
                </div>

                <label for="Email">Email address *</label>
                <input class="form__box" type="email" name="form_email" id="Email">
            
                <label>Your message *</label>
                <textarea class="form__box form__box-txt" name="comments"></textarea>

                <input class="btn topNav__btn" type="submit" value="Send">
            
            </form>
        </div>
    </div>
</div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.491588968004!2d-87.63014980198378!3d41.90357154229802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fd34fdf5d403d%3A0x96e3e65943066c26!2s1163+N+State+St%2C+Chicago%2C+IL+60610!5e0!3m2!1sen!2sus!4v1478564711680" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

<?php include ('footer.php'); ?>