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
		
		
		<div class="bread-crumbs"><span>You are here:</span>  <a href="index.php">Home</a> &rsaquo; Styles</div>
		
		
		<div class="content-container">
			
			<div class="sidebar-container">
				
			<div class="page-content content-sidebar">
				<h1 class="page-title">Styles</h1>
				<p>This is a sample page of various styles and typography.</p>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas augue diam, dapibus eget accumsan non, ullamcorper in ante. Nullam semper justo ut risus cursus vel faucibus leo aliquam. Vestibulum sed velit elit, vel malesuada tortor. Quisque congue metus in augue cursus placerat lacinia tellus volutpat. Curabitur bibendum pellentesque fringilla. Donec vestibulum dapibus elit sed ultrices. Sed nec lacus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				
				<hr>
				
				<h3>Block Quote</h3>
				<blockquote><p>Aliquam ipsum sapien, ultrices et dapibus a, volutpat suscipit orci. Etiam eu mauris nulla, non dapibus arcu. Nullam pretium enim sed lectus pulvinar accumsan. Donec placerat nisl sit amet mi varius varius. Nulla diam nisl, convallis in facilisis.</p></blockquote>
				
				
				<hr>
				
				<h3>List Styles</h3>
				
				<div class="grid2column">
					
					<ul class="checkmark">
						<li>Item #1</li>
						<li>Item #2</li>
						<li>Item #3</li>
						<li>Item #4</li>
					</ul>

				
				 </div> 
				
				<div class="grid2column lastcolumn">
					<ul class="arrow">
					<li>Item #1</li>
					<li>Item #2</li>
					<li>Item #3</li>
					<li>Item #4</li>
					</ul>
				</div>
				<div class="clearboth"></div>
				
				<div class="grid2column">
					<ul>
					<li>Item #1</li>
					<li>Item #2</li>
					<li>Item #3</li>
					<li>Item #4</li>
					</ul>
				</div> 
				<div class="grid2column lastcolumn">
					<ol>
						<li>Item #1</li>
						<li>Item #2</li>
						<li>Item #3</li>
						<li>Item #4</li>
					</ol>
				</div>
				<div class="clearboth"></div>
				
				<hr>
				
				<h3>Image Alignment</h3>
				<p><img class="alignright" src="http://progressionstudios.com/adora/images/photo-right.jpg" alt="" width="140" height="103" />Ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mauris dolor, semper eu commodo consectetur, porttitor ac tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla non quam dui, in bibendum tortor. <a href="#">Example link</a></p>
				<p>Nunc at tristique diam. Suspendisse potenti. Duis vel metus lacus, nec adipiscing ipsum. In eget urna est. Nulla faucibus cursus dui non suscipit. Nunc quam odio, consectetur at condimentum sit amet, accumsan sit amet quam. Etiam eu purus nibh. Praesent et nunc sed metus imperdiet dignissim.</p>
				<p><img src="http://progressionstudios.com/adora/images/photo-left.jpg" alt="" width="140" height="103" class="alignleft" />Cras sit amet quam mauris. Suspendisse ac purus sed leo tincidunt imperdiet. Integer pulvinar nunc eu eros porta eget sodales nulla imperdiet. Nam semper scelerisque viverra. Sed vitae egestas metus.</p>
				<p>Praesent vel enim est, eu ornare metus. Suspendisse sit amet nisi nunc. Quisque eget justo justo, in iaculis diam. Sed elementum mauris ac urna pharetra sollicitudin. Mauris ut faucibus turpis. Etiam mollis facilisis ligula vitae iaculis. Curabitur eget orci at turpis auctor scelerisque. Donec eget sapien felis. Phasellus ornare tincidunt sem non blandit. Cras turpis odio, porta ut molestie vitae, lacinia vel lacus.</p>
				
				
				<hr>
				
				<h3>Button Styles</h3>
				<p>The button is created by just adding one class to a text link. All of the background images and hover effects are added automatically!</p>
				<p><a href="#" target="" class="button">Learn More &rsaquo;</a> </p>
				
				<hr>
				<h3>Slider Demo</h3>
				
				<div class="slider-inside-wrapper">
					<div class="slider-inside" class="nivoSlider"> 
						
						<img src="http://progressionstudios.com/adora/images/slideshows/slider1.jpg" width="600" height="185" alt="" title="" /> 
						<img src="http://progressionstudios.com/adora/images/slideshows/slider2.jpg" width="600" height="185" alt="" title="" /> 
						<img src="http://progressionstudios.com/adora/images/slideshows/slider3.jpg" width="600" height="185" alt="" title="" /> 
						<img src="http://progressionstudios.com/adora/images/slideshows/slider4.jpg" width="600" height="185" alt="This is an example of a test caption" title="This is an example of a test caption" /> 
					</div>
				</div>
							<script type='text/javascript'>
							jQuery(window).load(function() {
							    jQuery('.slider-inside').nivoSlider({
							        effect:'fade', //Specify sets like: 'fold,fade,sliceDown'
							        animSpeed:500, //Slide transition speed
							        pauseTime:4500,
							        startSlide:0, //Set starting Slide (0 index)
							        directionNav:true, //Next & Prev
							        directionNavHide:true, //Only show on hover
							        controlNav:false, //1,2,3...
							        controlNavThumbs:false, //Use thumbnails for Control Nav
							        controlNavThumbsFromRel:false, //Use image rel for thumbs
							        controlNavThumbsSearch: '.jpg', //Replace this with...
							        controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
							        keyboardNav:true, //Use left & right arrows
							        pauseOnHover:true, //Stop animation while hovering
							        manualAdvance:false, //Force manual transitions
							        captionOpacity:0.8, //Universal caption opacity
							        beforeChange: function(){},
							        afterChange: function(){},
							        slideshowEnd: function(){}, //Triggers after all slides have been shown
							        lastSlide: function(){}, //Triggers when last slide is shown
							        afterLoad: function(){} //Triggers when slider has loaded
							    });
							});
							</script>
				
				
				
				<hr>
				<h3>Tabs Demo</h3>
				
					<div class="tabs">
				        <ul class="tabNavigation">
				            <li><a href="#tab-1">Tab 1</a></li>
				            <li><a href="#tab-2">Tab 2</a></li>
				            <li><a href="#tab-3">Tab 3</a></li>
							<div class="clearfix"></div>
				        </ul>
				        <div id="tab-1">
							<p>Example</p>
				        </div>
				        <div id="tab-2">
				            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				        </div>
				        <div id="tab-3">
				            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				        </div>
				    </div><!-- close .tabs -->
				
				
				
				<hr>
				<h3>Lightbox Images &amp; Video</h3>
				
				<div class="grid2column">
				<h5>Image lightbox</h5>
				<p><a href="http://progressionstudios.com/adora/images/portfolio5.jpg" rel="prettyPhoto" title=""><img src="http://progressionstudios.com/adora/images/transparency1.jpg"  alt="" width="295" height="221"  /></a> </div> <div class="grid2column lastcolumn">
				<h5>Video lightbox</h5>
				<p><a href="http://vimeo.com/14161753" rel="prettyPhoto" title=""><img src="http://progressionstudios.com/adora/images/transparency2.jpg" alt="" width="295" height="221" /></a> </div><div class="clearboth"></div>
				
				<hr>
				<h1>Heading 1</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacus orci, convallis cursus rutrum cursus, facilisis convallis ante. Nunc non imperdiet purus.</p>
				<h2>Heading 2</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacus orci, convallis cursus rutrum cursus, facilisis convallis ante. Nunc non imperdiet purus.</p>
				<h3>Heading 3</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacus orci, convallis cursus rutrum cursus, facilisis convallis ante. Nunc non imperdiet purus.</p>
				<h4>Heading 4</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacus orci, convallis cursus rutrum cursus, facilisis convallis ante. Nunc non imperdiet purus.</p>
				<h5>Heading 5</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacus orci, convallis cursus rutrum cursus, facilisis convallis ante. Nunc non imperdiet purus.</p>
				<h6>Heading 6</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacus orci, convallis cursus rutrum cursus, facilisis convallis ante. Nunc non imperdiet purus.</p>
				
				
			
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