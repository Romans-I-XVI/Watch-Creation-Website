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
						<li class="current-menu-item"><a href="portfolio.php">Portfolio</a>
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
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div><!-- close #navigation-narrow -->

		</div><!-- close #header-gradient -->
		
	</header>
	
	
	<div id="main" role="main">	
		
		
		<div class="bread-crumbs"><span>You are here:</span>  <a href="index.php">Home</a> &rsaquo; Portfolio</div>
		
		
		<div class="content-container">
			
			
				
			<div class="page-content">
				
				<ul class="sub-pagination">
					<li class="current-menu-item"><a href="#">All</a></li>
					<li><a href="#">Photography</a></li>
					<li><a href="#">Inspiration</a></li>
					<li><a href="#">Design</a></li>
				</ul>
				
				<h1 class="page-title">Portfolio</h1>
				<p class="page-description"></p>
				
				
				
				<div class="grid4column">
					<div class="portfolio-list">
					<span class="gallery-hover">
						<div class="icon-container">
							<a href="http://www.youtube.com/watch?v=kIl-C8ZFJmg" rel="prettyPhoto[gallery1]" title="" class="video-icon">Video</a>
							<a href="portfolio-single.php" class="page-icon">Page</a>
						</div>
						<img src="images/demo-content/portfolio1.png" width="202" height="152" alt="" />
					</span>
					<h5><a href="portfolio-single.php">Moto TF Ride Day</a></h5>
					<p>by Mike on Jun 30 2011</p>
					</div><!-- close .portfolio-list -->
				</div>
				<div class="grid4column">
					<div class="portfolio-list">
					<span class="gallery-hover">
						<div class="icon-container">
							<a href="images/demo-content/large1.jpg" rel="prettyPhoto[gallery1]" title="" class="photo-icon">Photo</a>
							<a href="portfolio-single.php" class="page-icon">Page</a>
						</div>
						<img src="images/demo-content/portfolio2.jpg" width="202" height="152" alt="" class="transparent-icon" />
					</span>
					<h5><a href="portfolio-single.php">Photo - Yosemite Park</a></h5>
					<p>by Mike on Jun 30 2011</p>
					</div><!-- close .portfolio-list -->
				</div>
				<div class="grid4column">
					<div class="portfolio-list">
					<span class="gallery-hover">
						<div class="icon-container">
							<a href="http://vimeo.com/21120050" rel="prettyPhoto[gallery1]" title="" class="video-icon">Video</a>
							<a href="portfolio-single.php" class="page-icon">Page</a>
						</div>
						<img src="images/demo-content/portfolio3.png" width="202" height="152" alt="" class="transparent-icon" />
					</span>
					<h5><a href="portfolio-single.php">Inner Secrets - Rear Wing</a></h5>
					<p>by Mike on Jun 30 2011</p>
					</div><!-- close .portfolio-list -->
				</div>
				<div class="grid4column lastcolumn">
					<div class="portfolio-list">
						<iframe src="http://player.vimeo.com/video/6686768?title=0&amp;byline=0&amp;portrait=0" width='202' height='152' frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					<h5><a href="portfolio-single.php">Inline Video Example</a></h5>
					<p>by Mike on Jun 30 2011</p>
					</div><!-- close .portfolio-list -->
				</div>
				<div class="clearfix"></div>
				
				<div class="grid4column">
					
					<div class="portfolio-list">
					<span class="gallery-hover">
						<div class="icon-container">
							<a href="http://trailers.apple.com/movies/universal/despicableme/despicableme-tlr1_r640s.mov?width=640&height=360" rel="prettyPhoto[gallery1]" title="" class="video-icon">Video</a>
							<a href="portfolio-single.php" class="page-icon">Page</a>
						</div>
						<img src="images/demo-content/portfolio4.png" width="202" height="152" alt="" />
					</span>
					<h5><a href="portfolio-single.php">Quicktime Video</a></h5>
					<p>by Mike on Jun 30 2011</p>
					</div><!-- close .portfolio-list -->
				</div>
				<div class="grid4column">
					<div class="portfolio-list">
					<span class="gallery-hover">
						<div class="icon-container">
							<a href="images/demo-content/large2.jpg" rel="prettyPhoto[gallery1]" title="" class="photo-icon">Photo</a>
							<a href="portfolio-single.php" class="page-icon">Page</a>
						</div>
						<img src="images/demo-content/portfolio5.jpg" width="202" height="152" alt="" class="transparent-icon" />
					</span>
					<h5><a href="portfolio-single.php">Photo - Cold Desert</a></h5>
					<p>by Mike on Jun 30 2011</p>
					</div><!-- close .portfolio-list -->
				</div>
				<div class="grid4column">
					<div class="portfolio-list">
					<span class="gallery-hover">
						<div class="icon-container">
							<a href="http://www.youtube.com/watch?feature=player_embedded&v=gxTuEC8RMzE" rel="prettyPhoto[gallery1]" title="" class="video-icon">Video</a>
							<a href="portfolio-single.php" class="page-icon">Page</a>
						</div>
						<img src="images/demo-content/portfolio6.png" width="202" height="152" alt="" class="transparent-icon" />
					</span>
					<h5><a href="portfolio-single.php">Nitro Circus</a></h5>
					<p>by Mike on Jun 30 2011</p>
					</div><!-- close .portfolio-list -->
				</div>
				<div class="grid4column lastcolumn">
					<div class="portfolio-list">
					<span class="gallery-hover">
						<div class="icon-container">
							<a href="http://www.youtube.com/watch?v=P8FlmTlmdzc&feature=pyv" rel="prettyPhoto[gallery1]" title="" class="video-icon">Video</a>
							<a href="portfolio-single.php" class="page-icon">Page</a>
						</div>
						<img src="images/demo-content/portfolio7.png" width="202" height="152" alt="" class="transparent-icon" />
					</span>
					<h5><a href="portfolio-single.php">Pacific Northwest</a></h5>
					<p>by Mike on Jun 30 2011</p>
					</div><!-- close .portfolio-list -->
				</div>
				<div class="clearfix"></div>
				
				
				<div class="grid4column">
					
					<div class="portfolio-list">
					<span class="gallery-hover">
						<div class="icon-container">
							<a href="http://vimeo.com/35083232" rel="prettyPhoto[gallery1]" title="" class="video-icon">Video</a>
							<a href="portfolio-single.php" class="page-icon">Page</a>
						</div>
						<img src="images/demo-content/portfolio8.png" width="202" height="152" alt="" />
					</span>
					<h5><a href="portfolio-single.php">3 Days in Dubai</a></h5>
					<p>by Mike on Jun 30 2011</p>
					</div><!-- close .portfolio-list -->
				</div>
				<div class="grid4column">
					<div class="portfolio-list">
					<span class="gallery-hover">
						<div class="icon-container">
							<a href="http://vimeo.com/35396305" rel="prettyPhoto[gallery1]" title="" class="video-icon">Video</a>
							<a href="portfolio-single.php" class="page-icon">Page</a>
						</div>
						<img src="images/demo-content/portfolio9.jpg" width="202" height="152" alt="" class="transparent-icon" />
					</span>
					<h5><a href="portfolio-single.php">Yosemite HD</a></h5>
					<p>by Mike on Jun 30 2011</p>
					</div><!-- close .portfolio-list -->
				</div>
				<div class="grid4column">
					<div class="portfolio-list">
					<span class="gallery-hover">
						<div class="icon-container">
							<a href="http://www.youtube.com/watch?v=qQ48NQjouoE" rel="prettyPhoto[gallery1]" title="" class="video-icon">Video</a>
							<a href="portfolio-single.php" class="page-icon">Page</a>
						</div>
						<img src="images/demo-content/portfolio10.png" width="202" height="152" alt="" class="transparent-icon" />
					</span>
					<h5><a href="portfolio-single.php">Gymkhana 2.1</a></h5>
					<p>by Mike on Jun 30 2011</p>
					</div><!-- close .portfolio-list -->
				</div>
				<div class="grid4column lastcolumn">
					<div class="portfolio-list">
					<span class="gallery-hover">
						<div class="icon-container">
							<a href="http://vimeo.com/34783883" rel="prettyPhoto[gallery1]" title="" class="video-icon">Video</a>
							<a href="portfolio-single.php" class="page-icon">Page</a>
						</div>
						<img src="images/demo-content/portfolio11.png" width="202" height="152" alt="" class="transparent-icon" />
					</span>
					<h5><a href="portfolio-single.php">Marina Bay Sands Skypark</a></h5>
					<p>by Mike on Jun 30 2011</p>
					</div><!-- close .portfolio-list -->
				</div>
				<div class="clearfix"></div>
				
				
				
				
			
			</div><!-- close .page-content -->
			
			
			
			
			<div class="clearfix"></div>
				
			
		</div><!-- close .content-container -->
		<div class="content-container-base-pagination">
		
			<div class="left-pagination">Page 1 of 3</div>
			<div class="right-pagination"></div>
			<div class="center-pagination"><a href="#" class="selected">1</a><a href="#">2</a><a href="#">3</a><a href="#">Next &rsaquo;</a></div>
			<div class="clearfix"></div>
			
		</div><!-- close .content-container-base or .content-container-base-pagination -->
		
	</div><!-- close #main -->
	
	
	
<?php include("footer.php"); ?>