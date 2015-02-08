<?php include("header.php"); ?>

<body>
	<header>
		
		<div id="header-top-container">
			<div id="header-top">
				
				<div id="header-top-left">
					<ul class="sf-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="#">Purchase</a>
							<ul>
								<li class="current"><a href="#">Sample drop-down</a></li>
								<li><a href="#aba">Example 1</a></li>
								<li><a href="#abb">Example 2</a></li>
								<li><a href="#abc">Example 3</a> 
									<ul>
										<li class="current"><a href="#">Keep's on going</a></li>
										<li><a href="#aba">Example 4</a></li>
										<li><a href="#abb">Example 5</a></li>
										<li><a href="#abcc">Example 6</a></li>
									</ul>
								</li>
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
						<li><a href="index.php">Home</a>
							<ul>
								<li><a href="index-v2.php">Homepage v2</a></li>
								<li><a href="index-v3.php">Homepage v3</a></li>
								<li><a href="index-v4.php">Homepage v4</a></li>
								<li><a href="index-vertical-slider.php">Homepage vertical slider</a></li>
							</ul>
						</li>
						<li><a href="about.php">About</a></li>
						<li><a href="styles.php">Styles</a>
							<ul>
								<li><a href="styles.php">Typography styles</a></li>
								<li><a href="full-width.php">Full width example</a> </li>
								<li><a href="sidebar-left.php">Sidebar left</a></li>
								<li><a href="sidebar-right.php">Sidebar right</a></li>
							</ul>
						</li>
						<li><a href="portfolio.php">Portfolio</a>
							<ul>
								<li><a href="one-column-portfolio.php">One column portfolio</a></li>
								<li><a href="two-column-portfolio.php">Two column portfolio</a></li>
								<li><a href="three-column-portfolio.php">Three column porfolio</a></li>
								<li><a href="portfolio.php">Four column portfolio</a></li>
								<li><a href="portfolio-sidebar.php">Four column portfolio w/ sidebar</a></li>
								<li><a href="portfolio-sidebar-three.php">Three column portfolio w/ sidebar</a></li>
								<li><a href="portfolio-sidebar-two.php">Two column portfolio w/ sidebar</a></li>
								<li><a href="portfolio-sidebar-one.php">One column portfolio w/ sidebar</a></li>
								<li><a href="portfolio-single.php">Single portfolio</a></li>
								<li><a href="portfolio-single-v2.php">Single Portfolio v2</a></li>
							</ul>
						</li>
						<li class="current-menu-item"><a href="blog.php">Blog</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div><!-- close #navigation-narrow -->

		</div><!-- close #header-gradient -->
		
	</header>
	
	
	<div id="main" role="main">	
		
		
		<div class="bread-crumbs"><span>You are here:</span>  <a href="index.php">Home</a> &rsaquo; Blog Full Width</div>
		
		
		<div class="content-container">
			

				
			<div class="page-content">
				<h1 class="page-title">Blog Full Width</h1>
				
				<p class="page-description">Optional blog description or subheadline goes here...</p>
				
				
				
				<div class="blog-post">
					<h2 class="blog-title"><a href="blog-single.php">Regular blog post (Same size as portfolio full width)</a></h2>
					
					<div class="blog-featured-image"><a href="blog-single.php"><img src="images/demo-content/blog-image.jpg" width="900" height="250" /></a></div>
					
					<div class="blog-details">by <a href="#">Michael Garcia</a> on <a href="#">Jan 29 2011</a> in <a href="#">Photography</a>  with <a href="#">5 comments</a></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas augue diam, dapibus eget accumsan non, ullamcorper in ante. Nullam semper justo ut risus cursus vel faucibus leo aliquam. Vestibulum sed velit elit, vel malesuada tortor. Quisque congue metus in augue cursus placerat lacinia tellus volutpat. Curabitur bibendum pellentesque fringilla. Donec vestibulum dapibus elit sed ultrices. Sed nec lacus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					
					<p><a href="blog-single.php" class="button">Read more &rsaquo;</a></p>
					
					<hr>
					
					<p class="blog-tags"><strong>Tags</strong>: <a href="#">video</a>, <a href="#">design</a>, <a href="#">porsche</a>, <a href="#">911</a></p><!-- close .portfolio-tags -->
					
					<div class="social-networking-portfolio">
	<div class="google-plus">
		<!-- Place this tag where you want the +1 button to render -->
		<g:plusone size="medium" href="http://linkgoeshere"></g:plusone>
		<!-- Place this render call where appropriate -->
		<script type="text/javascript">
		(function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		})();
		</script>
	</div>
	
	<div class="twitter-button"><a href="https://twitter.com/share" data-url="http://linkgoeshere" data-text="Check out this site" class="twitter-share-button" target="_blank">Share on Twitter</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>
	
	<div><a name="fb_share" type="button_count"  share_url="http://linkgoeshere" target="_blank">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></div>
	
	<div><iframe src="http://www.facebook.com/plugins/like.php?href=http://linkgoeshere&amp;layout=button_count&amp;show_faces=true&amp;width=90&amp;action=like&amp;colorscheme=light&amp;height=23" scrolling="no" allowtransparency="true" frameborder="0" style="border:none; overflow:hidden; width:85px; height:23px; background:transparent; margin-right:-15px;"></iframe></div>
</div><!-- close .social-networking-portfolio -->
					
					
					<div class="clearfix"></div>
					<hr>
					
				</div><!-- close .blog-post -->
				
				
				
				
				
				
				
				
				<div class="blog-post">
					<h2 class="blog-title"><a href="blog-single.php">Regular blog post (Same size as portfolio full width)</a></h2>
					
					<div class="blog-featured-image"><a href="blog-single.php"><img src="images/demo-content/blog-image.jpg" width="900" height="250" /></a></div>
					
					<div class="blog-details">by <a href="#">Michael Garcia</a> on <a href="#">Jan 29 2011</a> in <a href="#">Photography</a>  with <a href="#">5 comments</a></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas augue diam, dapibus eget accumsan non, ullamcorper in ante. Nullam semper justo ut risus cursus vel faucibus leo aliquam. Vestibulum sed velit elit, vel malesuada tortor. Quisque congue metus in augue cursus placerat lacinia tellus volutpat. Curabitur bibendum pellentesque fringilla. Donec vestibulum dapibus elit sed ultrices. Sed nec lacus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					
					<p><a href="blog-single.php" class="button">Read more &rsaquo;</a></p>
					
					<hr>
					
					<p class="blog-tags"><strong>Tags</strong>: <a href="#">video</a>, <a href="#">design</a>, <a href="#">porsche</a>, <a href="#">911</a></p><!-- close .portfolio-tags -->
					
					<div class="social-networking-portfolio">
						
						<div class="google-plus">
							<!-- Place this tag where you want the +1 button to render -->
							<g:plusone size="medium" href="http://linkgoeshere"></g:plusone>
							<!-- Place this render call where appropriate -->
							<script type="text/javascript">
							(function() {
							var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
							po.src = 'https://apis.google.com/js/plusone.js';
							var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
							})();
							</script>
						</div>

						<div class="twitter-button"><a href="https://twitter.com/share" data-url="http://linkgoeshere" data-text="Check out this site" class="twitter-share-button" target="_blank">Share on Twitter</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>

						<div><a name="fb_share" type="button_count"  share_url="http://linkgoeshere" target="_blank">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></div>

						<div><iframe src="http://www.facebook.com/plugins/like.php?href=http://linkgoeshere&amp;layout=button_count&amp;show_faces=true&amp;width=90&amp;action=like&amp;colorscheme=light&amp;height=23" scrolling="no" allowtransparency="true" frameborder="0" style="border:none; overflow:hidden; width:85px; height:23px; background:transparent; margin-right:-15px;"></iframe></div>
						
					</div><!-- close .social-networking-portfolio -->
					
					
					<div class="clearfix"></div>
					<hr>
					
				</div><!-- close .blog-post -->
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				

			</div><!-- close .page-content -->
			
			
			
			
			
			<div class="clearfix"></div>
		</div><!-- close .content-container -->
		<div class="content-container-base">
			
		</div><!-- close .content-container-base or .content-container-base-pagination -->
		
	</div><!-- close #main -->
	
	
	
<?php include("footer.php"); ?>