<?php
$donation = $_GET['donation'];

//base minimum php for form for responsive class:
if($_POST['did_submit'] == 1){

//capture the values from the post data array
//clean the potentially dirty and dangerous data
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);

//allow certain tags to come through our message string
$allow = '<b><i><strong><em><p><br>';
$message = strip_tags(trim($_POST['message']), $allow);

//start php validation

$valid = true;

if(strlen($name) == 0){
	$valid = false;
	$name_error = '<label class="error">Please fill out your name.</label>';
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$valid = false;
	//tell the user that their email is invalid or blank
	$email_error = '<label class="error">Please provide a valid email address.</label>';
}

if(strlen($subject)== 0){
	$valid = false; 
	//tell the user that they did not select a subject
	$subject_error = '<label class="error">Please choose one of the ways to donate your time.</label>';
}

if(strlen($message) < 8){
	$valid = false; 
	//tell the user that they didn't leave a long enough message
	$message_error = '<label class="error">Please write a message that is at least 8 characters long.</label>';
}

//at this point only send the message if valid is still true.
 	if($valid){
 		// get ready to send mail
 		//the email you want the mail to be sent to
 		$to = 'trishzwei@gmail.com';
		//the subject line of your email
		if($subject == 'other'){
			$subject = 'something different';
		}
		$mail_subject = "A Donation of $subject";

		//the content of our mail
		$body .="Name: $name \n";
		$body .="Email: $email \n";
		$body .="Message: $message \n";

		//the headers
		$header = "From: $email \r\n";
		$header .= "Reply-to: $email \r\n";
	
		//send the mail! 
		//mail_sent will be 1 if mail was sent, 0 if mail was not sent		
		$mail_sent = mail($to, $mail_subject, $body, $header);

 	} // end if valid is still true


} // end if did_submit

?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us | The Santee Food Bank</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.validateT.min.js"></script>
	<script type="text/javascript" src="scripts/sitejs.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="contact">
<header>
<a  id="logo" href="index.html"><h1>Santee Food Bank</h1></a>
<a href="#menu" class="menu-link"><i class="icon-menu"></i>Menu</a>
<nav id="menu" role="navigation" class="cf">
     <ul>
          <li><a href="about.html">About</a></li>
          <li><a href="location.html">Location</a></li>
          <li><a href="contact.php">Contact</a></li>
     </ul>
</nav>
</header>
<main>
<h1>How Would You Help?</h1>
<section class="cf">
<p>Please tell us how you would like to help the community. Below is a quick contact form that tells us of your intent.</p>
<p>Or you can <a href="paypal.php" target="_new" class="highlight">get involved</a> with a donation of:</p>
		<div class="quick-amounts">
			<a href="paypal.php?donate=10" target="_new" title="donate $10">$10</a> 
			<a href="paypal.php?donate=25" target="_new" title="donate $25">$25</a> 
			<a href="paypal.php?donate=50" target="_new" title="donate $50">$50</a>
		</div> 
<p>or any amount you choose through PayPal to support funding for the food bank.</p>
</section>

<?php  	
    //if the form was submitted, check to see if the mail was sent... 
	if($_POST['did_submit'] && $mail_sent == 1){
				//display success message...
		echo '<section class="cf success" id="message">
				<h1>Your Message was Sent Successfully!</h1>
				<p>Someone from the Santee Food Bank will contact you about your message shortly. Use the navigation to return to any page on the site.</p>
			  </section>';
    }else if($_POST['did_submit'] && $mail_sent != 1){
		echo '<section class="cf error" id="message">
				<h1>Your Message was not Sent</h1>
				<p>Please check the form below for errors. If there are none, then there was a hiccup of some kind. You can resubmit later or feel free to call us at the number at the bottom of the page.</p>
			  </section>';    	
    }
 // end did_submit && mail sent...
?>

<?php  
    //checks to see if $mail_sent is not equal to 1. 
    if(1 != $mail_sent){
              ?>
<section class="cf">
	<!--note to self: putting in the html validate - works in chrome when js is turned off -->
	<form id="contactform" name="contactform" method="post" action="contact.php#message" autocomplete="off" validate>
	<fieldset>
		<legend>Contact Information</legend>
		<label for="name">Name</label>
		<input type="text" name="name" placeholder="Your Name" class="required" required>
		<?php if(isset($name_error)){echo $name_error;} ?>
		<label for="email">Email</label>
		<input type="email" name="email" placeholder="johnsmith@example.com" class="required" required>
		<?php if(isset($email_error)){echo $email_error;} ?>
		<label for="subject">Subject</label>
		<select name="subject" class="required" required>
			<option value="">Please Choose</option>
			<option value="time"<?php if($donation == 'time'){echo "selected";} ?>>I want to donate my time</option>
			<option value="food" <?php if($donation == 'food'){echo "selected";} ?>>I want to donate food</option>
			<option value="other">Other</option>
		</select>
		<?php if(isset($subject_error)){echo $subject_error;} ?>		
	<!-- Name, email, subject-->
	</fieldset>
	<fieldset>
			<legend>Your Message</legend>
			<textarea name="message" placeholder="Enter your message here" class="required" required></textarea>
				<?php if(isset($message_error)){echo $message_error;} ?>	
		<!-- text area-->
		<button type="submit">Send Message</button>
		</fieldset>
		<input type="hidden" name="did_submit" value="1">
	</form>
</section>
<?php }//end if mail did not submit ?>
</main>
<footer class="cf">
<section>
	<h4>Current Location</h4>
	<p>Friends Christian Church<br>
	<a class="location" href="https://goo.gl/maps/Gkw3S">10925 Hartley Road, Suite&nbsp;J<br>
	Santee, CA 92071</a></p>
	<script type="text/javascript">getTheHours();</script>
</section>
<section>
	<h4>Phone Number</h4>
	<p>
	<a href="tel:16194484456"  class="phone">(619) 448-4456</a>
	</p>
</section>
<section>
	<h4>Mailing Address</h4>
	<p>
	P.O. Box 712054<br>
	Santee, California 92072-2054
	</p>
</section>
<section>
	<h4>Fax Number</h4>
	<p>
		(619) 448-2096
	</p>
</section>
<section>
	<small>&copy;2014 Santee Food Bank - All Rights Reserved<br>
10925 Hartley Road, Suite J. Santee, CA 92071 </small><br>
	<small>Web Design by: <a href="http://trishladd.com" target="_blank">TrishLadd.com</a></small>
</section>
</footer>
</body>
</html>