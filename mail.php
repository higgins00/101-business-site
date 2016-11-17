<?php

if($_POST["submit"]) {
    $recipient="danie.higgins@gmail.com";
    $subject="Fiona Salon - " . $_POST["form_subject"];
    $sender=$_POST["form_name"];
    $senderEmail=$_POST["form_email"];
    $message=$_POST["form_message"];

    $mailBody="Name: $sender\n
    		   Email: $senderEmail\n
    		   Subject: $subject\n\n
    		   $message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="Thank you! Your message has been sent.";

	echo "<script type='text/javascript'>alert('$thankYou');</script>";

	// Save a copy to text

		$fp = fopen('data.txt', 'a') or die ("can't open file");

		$stringData = 'Name: ' . $sender . PHP_EOL;
		fwrite($fp, $stringData);

		$stringData = 'Email: ' . $senderEmail . PHP_EOL;
		fwrite($fp, $stringData);

		$stringData = 'Subject: ' . $subject . PHP_EOL;
		fwrite($fp, $stringData);

		$stringData = $message . PHP_EOL;
		fwrite($fp, $stringData);

		fclose($fp);
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form class="contactForm" method="post" action="<?php $currect_page ?>">

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
                <textarea class="contactForm__box contactForm__box-txt" name="form_message"></textarea>

                <input class="btn btn--dark btn-space" type="submit" value="Send" name="submit">
            </form>

</body>
</html>

