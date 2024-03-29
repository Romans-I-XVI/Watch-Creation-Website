<?php include("header.php"); ?>

<body>
	<header>
		
		<div id="header-top-container">
			<div id="header-top">
				
				<div id="header-top-left">
					<ul class="sf-menu">
						<li><a href="index.php">Home</a></li>
						<li class="current"><a href="about.php">About</a></li>
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
						<li class="current-menu-item"><a href="styles.php">Styles</a>
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
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div><!-- close #navigation-narrow -->

		</div><!-- close #header-gradient -->
		
	</header>
	
	
	<div id="main" role="main">	
		
		
		<div class="bread-crumbs"><span>You are here:</span>  <a href="index.php">Home</a> &rsaquo; Full Width</div>
		
		
		<div class="content-container">
			
			
				
			<div class="page-content">
				<h1 class="page-title">Full Width</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas augue diam, dapibus eget accumsan non, ullamcorper in ante. Nullam semper justo ut risus cursus vel faucibus leo aliquam. Vestibulum sed velit elit, vel malesuada tortor. Quisque congue metus in augue cursus placerat lacinia tellus volutpat. Curabitur bibendum pellentesque fringilla. Donec vestibulum dapibus elit sed ultrices. Sed nec lacus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				
				
				<p>To create full width, remove "<strong>content-sidebar</strong>" class, "<strong>sidebar-container</strong>" div, and "<strong>sidebar</strong>" div.</p>
				
				
				<p>This is a sample full column width page layout. You will also find various column layout examples that should help you out.</p>
				<div class="grid2column">
				<h5>1/2</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus. Aenean erat ligula, pharetra non eleifend a, luctus ac orci. Integer euismod dignissim sodales. Curabitur massa lorem, consequat quis consectetur vel, imperdiet id dui. Integer tristique risus placerat tellus convallis et interdum lorem feugiat. Etiam pretium lacus vel eros semper at feugiat eros rutrum.</div> <div class="grid2column lastcolumn">
				<h5>1/2</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus. Aenean erat ligula, pharetra non eleifend a, luctus ac orci. Integer euismod dignissim sodales. Curabitur massa lorem, consequat quis consectetur vel, imperdiet id dui. Integer tristique risus placerat tellus convallis et interdum lorem feugiat. Etiam pretium lacus vel eros semper at feugiat eros rutrum.</div><div class="clearboth"></div>
				<div class="grid2column">
				<h5>1/2</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus. Aenean erat ligula, pharetra non eleifend a, luctus ac orci. Integer euismod dignissim sodales. Curabitur massa lorem, consequat quis consectetur vel, imperdiet id dui. Integer tristique risus placerat tellus convallis et interdum lorem feugiat. Etiam pretium lacus vel eros semper at feugiat eros rutrum.</div>
				<div class="grid4column">
				<h5>1/4</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</div> <div class="grid4column lastcolumn">
				<h5>1/4</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</div><div class="clearboth"></div>
				<div class="grid4column">
				<h5>1/4</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</div> <div class="grid4column">
				<h5>1/4</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</div> <div class="grid4column">
				<h5>1/4</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</div> <div class="grid4column lastcolumn">
				<h5>1/4</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</div><div class="clearboth"></div>
				<div class="grid4columnbig">
				<h5>3/4</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus. Aenean erat ligula, pharetra non eleifend a, luctus ac orci. Integer euismod dignissim sodales. Curabitur massa lorem, consequat quis consectetur vel, imperdiet id dui. Integer tristique risus placerat tellus convallis et interdum lorem feugiat. Etiam pretium lacus vel eros semper at feugiat eros rutrum. Aenean erat ligula, pharetra non eleifend a, luctus ac orci. Integer euismod dignissim sodales. Curabitur massa lorem, consequat quis consectetur vel, imperdiet id dui. Integer tristique risus placerat tellus convallis et interdum lorem feugiat. Etiam pretium lacus vel eros semper at feugiat eros rutrum.</div> <div class="grid4column lastcolumn">
				<h5>1/4</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</div><div class="clearboth"></div>
				<div class="grid3column">
				<h5>1/3</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</div> <div class="grid3column">
				<h5>1/3</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</div> <div class="grid3column lastcolumn">
				<h5>1/3</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</div><div class="clearboth"></div>
				<div class="grid3columnbigcolumn">
				<h5>2/3</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus. Aenean erat ligula, pharetra non eleifend a, luctus ac orci. Integer euismod dignissim sodales. Curabitur massa lorem, consequat quis consectetur vel, imperdiet id dui. Integer tristique risus placerat tellus convallis et interdum lorem feugiat. Etiam pretium lacus vel eros semper at feugiat eros rutrum.</div> <div class="grid3column lastcolumn">
				<h5>1/3</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</div><div class="clearboth"></div> </p>
				
				
			
			</div><!-- close .page-content -->
			
			
			
			
			<div class="clearfix"></div>
				
			
		</div><!-- close .content-container -->
		<div class="content-container-base">
		
		</div><!-- close .content-container-base or .content-container-base-pagination -->
		
	</div><!-- close #main -->
	
	
	
<?php include("footer.php"); ?>