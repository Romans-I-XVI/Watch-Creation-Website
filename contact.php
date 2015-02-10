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
		
		<div id="header-top-container">
			<div id="header-top">
				
				<div id="header-top-left">
					<ul class="sf-menu">
						<li><a href="#">Organizations</a>
							<ul>
								<li><a href="video-player.php?id=0">Creation Today</a></li>
								<li><a href="video-player.php?id=1">Answers In Genesis</a></li>
								<li><a href="video-player.php?id=2">Creation Truth Foundation</a></li>
								<li><a href="video-player.php?id=3">Awesome Science Media</a></li>
								<li><a href="video-player.php?id=4">Museum Of Earth History</a></li>
								<li><a href="video-player.php?id=5">The Creation Museum</a></li>
								<li><a href="video-player.php?id=6">Northwest Creation Network</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- close #header-top-left -->

				<div id="header-top-right">
					<div class="social-icons"><span>Connect with us:</span> <a href="http://twitter.com/" target="_blank"><img src="images/social-icons/twitter.png" width="20" height="20" alt="Twitter" class="transparent"></a> <a href="http://facebook.com/" target="_blank"><img src="images/social-icons/facebook.png" width="20" height="20" alt="Facebook" class="transparent"></a> <a href="http://youtube.com/" target="_blank"><img src="images/social-icons/youtube.png" width="20" height="20" alt="Youtube" class="transparent"></a> <a href="mailto:no-reply@email.com"><img src="images/social-icons/email.png" width="20" height="20" alt="E-mail" class="transparent"></a></div>
				</div><!-- close #header-top-right -->
				
				<div class="clearfix"></div>
			</div><!-- close #header-top -->
		</div><!-- close #header-top-container -->
		
		
		
		<div id="header-gradient">
			
			<div id="header-logo-container">
				<div id="logo"><a href="index.php"><img src="images/logo.png" alt="Logo"></a></div>
				
				<div id="header-logo-right">
					<form method="get" class="searchform" action="">
						<label for="s" class="assistive-text">Search</label>
						<input type="text" class="field" name="s" id="s" placeholder="Search" />
						<input type="submit" class="submit" name="submit" id="searchsubmit" value="Search" />
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
				<h5>Multiple Sidebars</h5>
				<p>Pages have a separate sidebar from the blog posts. This allows you to choose unique widgets using multiple sidebars.</p>
				<div class="blank-divider"></div>
				
				
			
				
				<h5>Flickr Widget</h5>
				<script type="text/javascript">
				//Flickr Widget in Sidebar			
				jQuery(document).ready(function($){		 			   
					// Our very special jQuery JSON fucntion call to Flickr, gets details of the most recent images			   
					$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?id=52617155@N08&lang=en-us&format=json&jsoncallback=?", displayImages);  //YOUR IDGETTR GOES HERE
					function displayImages(data){																															   
						// Randomly choose where to start. A random number between 0 and the number of photos we grabbed (20) minus  7 (we are displaying 7 photos).
						var iStart = Math.floor(Math.random()*(0));	

						// Reset our counter to 0
						var iCount = 1;								

						// Start putting together the HTML string
						var htmlString = "<ul>";					

						// Now start cycling through our array of Flickr photo details
						$.each(data.items, function(i,item){

							// Let's only display 6 photos (a 2x3 grid), starting from a the first point in the feed				
							if (iCount > iStart && iCount < (iStart + 7)) {

								// I only want the ickle square thumbnails
								var sourceSquare = (item.media.m).replace("_m.jpg", "_s.jpg");		

								// Here's where we piece together the HTML
								htmlString += '<li><a href="' + item.link + '" target="_blank">';
								htmlString += '<img src="' + sourceSquare + '" alt="' + item.title + '" title="' + item.title + '"/>';
								htmlString += '</a></li>';
							}
							// Increase our counter by 1
							iCount++;
						});		

					// Pop our HTML in the #images DIV	
					$('.flickr-widget-6').html(htmlString + "</ul>");

					// Close down the JSON function call
					}

				// The end of our jQuery function	
				});
				</script>
				<div id="flickr-footer" class="flickr-widget-6"></div>
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