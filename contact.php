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
<?php include("header.php"); ?>

<body>
	<header>
		
		<?php include("header-top-container.php")?>
		
		
		
		<div id="header-gradient">
			
			<div id="header-logo-container">
				<div id="logo"><a href="index.php"><img src="images/logo.png" alt="Logo"></a></div>
				
				<div id="header-logo-right">
					<form method="get" class="searchform" action="search.php">
						<label for="s" class="assistive-text">Search</label>
						<input type="text" class="field" name="search" id="s" placeholder="Search" />
					</form>
					<!--div class="advertisement"><a href="http://www.google.com" target="_blank"><img src="images/demo-content/advertisement.png" alt="Ad" width="468" height="60"></a></div-->
					
				</div><!-- close #header-logo-right -->
			
			<div class="clearfix"></div>
			</div><!-- close #header-logo-container -->
			
			<div id="navigation-narrow">
				<nav>
					<ul class="sf-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="store.php">Store</a></li>
						<li><a href="myvideos.php">My Videos</a></li>
						<li class="current-menu-item"><a href="contact.php">Contact</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div><!-- close #navigation-narrow -->

		</div><!-- close #header-gradient -->
		
	</header>
	
	
	<div id="main" role="main">	
		
		
		<div class="bread-crumbs"><span>You are here:</span>  <a href="index.php">Home</a> &rsaquo; Contact us</div>
		
		
		<div class="content-container">
			
			<div class="sidebar-container">
				
			<div class="page-content content-sidebar">
				<h1 class="page-title">Contact us</h1>
				<p></p>
				
				
				<h3>Get in touch!</h3>
				
				
				<script type="text/javascript">
					$(document).ready(function(){
						$("#contactform").validate();
					});
				</script>
				
				
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
				
			
			</div><!-- close .page-content -->
			
			
			<div class="sidebar">
				<h5>Some Info</h5>
				<p>We can put whatever we want here.</p>
				<div class="blank-divider"></div>
				
				
				
			</div><!-- close .sidebar -->
			
			<div class="clearfix"></div>
			</div><!-- close .sidebar-container -->
			
			
		</div><!-- close .content-container -->
		<div class="content-container-base">
			<div class="side-bar-base"></div>
		</div><!-- close .content-container-base or .content-container-base-pagination -->
		
	</div><!-- close #main -->
	
	
	
<?php include("footer.php"); ?>