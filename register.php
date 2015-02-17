<?php include("header.php"); ?>


<body>
	<header>
		
		
		
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
						<li><a href="contact.php">Contact</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div><!-- close #navigation-narrow -->

		</div><!-- close #header-gradient -->
		
	</header>
	
	
	<div id="main" role="main">	
		
		
		<div class="bread-crumbs"><span>You are here:</span>  Register</div>
		
		
		<div class="content-container">
			
			<div class="sidebar-container">
				
			<div class="page-content content-sidebar">
				
				<div id="contact-wrapper">

				<?php
				if(!empty($_POST['email']) && !empty($_POST['password']))
				{
				    $password = md5(mysql_real_escape_string($_POST['password']));
				    $password_confirm = md5(mysql_real_escape_string($_POST['password_confirm']));
				    $email = mysql_real_escape_string($_POST['email']);
				     
				     $checkusername = mysql_query("SELECT * FROM users WHERE EmailAddress = '".$email."'");
				      
				     if(mysql_num_rows($checkusername) == 1)
				     {
				        echo "<h1>Oops</h1>";
				        echo "<p>Sorry, that email is in use. Please go back and try again.</p>";
				     }
				     elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
				     {
				        echo "<h1>Oops</h1>";
				        echo "<p>Invalid email address. Please go back and try again.</p>";
				     }
					 elseif ($password != $password_confirm) 
				     {
				        echo "<h1>Oops</h1>";
				        echo "<p>Passwords don't match. Please go back and try again.</p>";
				     }
				     else
				     {
				        $registerquery = mysql_query("INSERT INTO users (EmailAddress, Password) VALUES('".$email."', '".$password."')");
				        if($registerquery)
				        {
				            echo "<h1>Success!</h1>";
				            echo "<p>Your account was successfully created. Please <a href=\"index.php\">click here to login</a>.</p>";
				        }
				        else
				        {
				            echo "<h1>Error</h1>";
				            echo "<p>Sorry, your registration failed. Please go back and try again.</p>";    
				        }       
				     }
				}
				else
				{
				    ?>

					   <h1>Register</h1>
					     
					   <p>Please enter your details below to register.</p>
					     
					    <form method="post" action="register.php" name="registerform" id="contactform">
					    <fieldset>
					    	<div>
					        <label for="email">Email:</label><input type="text" name="email" id="email" />
					       </div>
					       <div>
					        <label for="password">Password:</label><input type="password" name="password" id="password" />
					       </div>
					       <div>
					        <label for="password-confirm">Confirm Password:</label><input type="password" name="password_confirm" id="password_confirm" />
					       </div>
					       <div>
					        <input type="submit" name="register" id="register" value="Register" class="button" />
					    	</div>
					    </fieldset>
					    </form>
					    
					<?php
					}
					?>
     
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


















<body>  
<div id="main">

     
   <h1>Register</h1>
     
   <p>Please enter your details below to register.</p>
     
    <form method="post" action="register.php" name="registerform" id="registerform">
    <fieldset>
        <label for="email">Email:</label><input type="text" name="email" id="email" /><br />
        <label for="password">Password:</label><input type="password" name="password" id="password" /><br />
        <label for="password-confirm">Confirm Password:</label><input type="password" name="password_confirm" id="password_confirm" /><br />
        <input type="submit" name="register" id="register" value="Register" />
    </fieldset>
    </form>
     
    
 
</div>
</body>
</html>
