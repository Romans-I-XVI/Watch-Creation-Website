<?php
//If the form is submitted
if(isset($_POST['submit'])) {
	
	$comments = $_POST['message'];

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}


	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'mike@progressionstudios.com'; //Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nComments:\n $comments";
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, 'Your Website Subject', $body, $headers);
		$emailSent = true;
	}
}
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Primero | Site Template</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Mobile viewport optimized: j.mp/bplateviewport -->

	<link rel="stylesheet" href="style.css?v=2"><!-- CSS Styles -->
	
	<script src="js/libs/modernizr-2.0.6.min.js"></script><!-- MODERNIZR JavaScript for older browsers -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script><!-- Google CDN's jQuery with a protocol relative URL -->
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.1.min.js"><\/script>')</script><!-- Local fall-back for Google CDN -->
	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$("#contactform").validate();
		});
	</script>

</head>


<body class="contact">
	
	<div id="contact-wrapper">

		
		<?php if(isset($hasError)) { //If errors are found ?>
			<p class="error">Please check if you've filled all the fields with valid information. Thank you.</p>
		<?php } ?>

		<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
			<p class="success">Email Successfully Sent!</p>
			<p class="success2">Thank you <strong><?php echo $name;?></strong> for using my contact form! I will be in touch with you soon.</p>
		<?php } ?>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
			<div>
			    <label for="name">Name:<span class="required">*</span></label>
				<input type="text" size="28" name="contactname" id="contactname" value="" class="required" />
			</div>

			<div>
				<label for="email">Email:<span class="required">*</span></label>
				<input type="text" size="28" name="email" id="email" value="" class="required email" />
			</div>

			<div>
				<label for="message">Message:</label>
				<textarea rows="10" cols="38" name="message" id="message"></textarea>
			</div>
		    <input type="submit" value="Send Message" name="submit" class="button" />
		</form>
		</div><!-- close #contact-wrapper -->
	


</body>
</html>