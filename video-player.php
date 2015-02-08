<?php include("header.php");
	$id= (int) $_GET["id"];
	$xml=simplexml_load_file("http://s3.amazonaws.com/roku-creation-channel/categories.xml") or die("Error: Cannot create object");
	$child=$xml->category[$id];
	function truncate($text, $length) {
   	$length = abs((int)$length);
   	if(strlen($text) > $length) {
      $text = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $text);
   	}
   	return($text);
	}
	$meta_title='test'
 ?>
 <script>
 	function ajax_reload(xml,id){
 		$("#showcase").load("video_div.php?xml="+xml+"&video="+id+" #showcase");
 		}
 </script>

<body>
	<header>
		
		<div id="header-top-container">
			<div id="header-top">
				
				<div id="header-top-left">
					<ul class="sf-menu">
						<li class="current-menu-item"><a href="index.php">Home</a></li>
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
						<li class="current-menu-item"><a href="index.php">Home</a>
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
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div><!-- close #navigation-narrow -->

		</div><!-- close #header-gradient -->
		
	</header>
	
	
	<div id="main" role="main">	
		
		<div class="bread-crumbs"></div>
		<!--div class="bread-crumbs"><span>You are here:</span>  <a href="#">Home</a> &rsaquo; About us</div-->
		
		<div class="content-container">
			<?php
			$video= $_GET["video"];
			echo '<div id="showcase" class="showcase">
				
				<!-- START SLIDE .showcase-slide-->
				<div class="showcase-slide">
					<div class="showcase-content">
						<div class="slider-left">
							<iframe src="http://player.vimeo.com/video/22884674?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="560" height="315" frameborder="0"></iframe>
						</div><!-- close .slider-left -->
						<div class="slider-right">
							<h2>'.$video.'</h2>
							<div class="post-details-slider">by <a href="#">Michael Garcia</A> on <a href="#">Jan 29 2011</a></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipis cing elit. Ut imperdiet facilisis facilisis. Vesti bulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilias...</p>
							<div class="more-link-slider"><a href="" class="button">Watch Now &rsaquo;</a> <span>or <a href="#">Join Discussion</a></span></div>
						</div><!-- close .slider-right -->
					</div>
			</div>';
			?>
		
				
				
			
			
			
		</div><!-- close .content-container -->
		<div class="content-container-base-pagination"></div><!-- close .content-container-base or .content-container-base-pagination -->
		
		<div class="content-container">
			
			<div class="tabs">
		            <?php
		            echo '<ul class="tabNavigation">';
		        	foreach($child->children() as $section){
		        		echo '<li><a href="#'.str_replace(' ','-',$section['title']).'">'.$section['title'].'</a></li>';
					}
					echo '<div class="clearfix"></div>';
					echo '</ul>';
					foreach($child->children() as $section){
						echo '<div id="'.str_replace(' ','-',$section['title']).'">';
						$feed=simplexml_load_file($section['feed']);
						foreach($feed->children() as $item){
							$mydate = strtotime($item->date);
							if ($mydate) {
								$mydate=date('F jS Y', $mydate);
							}
							echo '
							<div class="grid4column">
								<div class="portfolio-list">
								<div class="gallery-hover">
									<a href="#showcase" onclick="ajax_reload(\''.$section['feed'].'\',\''.$item->contentId.'\')"><img src="'.$item['hdImg'].'" width="202" height="114" alt="" /></a>
								</div>
								<h5><a href="#showcase" onclick="ajax_reload(\''.$section['feed'].'\',\''.$item->contentId.'\')">'.truncate($item->title,75).'</a></h5>
								<p>'.$mydate.'</p>
								</div><!-- close .portfolio-list -->
							</div>
							';
						}
						echo '</div>';
						
					}
		        	?>
		    </div><!-- close .tabs -->
			
			
			<div class="clearfix"></div>
		</div><!-- close .content-container -->
		<div class="content-container-base-pagination">
			<div class="left-pagination"><a href="#"></a></div>
			<div class="right-pagination"></div>
			<div class="center-pagination"></div>
			<div class="clearfix"></div>
		</div><!-- close .content-container-base or .content-container-base-pagination -->
		
	</div><!-- close #main -->
	

<?php include("footer.php"); ?>