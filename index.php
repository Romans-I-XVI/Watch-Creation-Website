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
						<li class="current-menu-item"><a href="index.php">Home</a></li>
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
		
		
		<div class="bread-crumbs"><span>You are here:</span>  Home</div>
		
		
		<div class="content-container">
			
			
				
			<div class="page-content">
				
				
				
				<h1 class="page-title">Organizations</h1>
				<p class="page-description"></p>
				
				<?php
					$xml=simplexml_load_file("http://s3.amazonaws.com/roku-creation-channel/categories.xml") or die("Error: Cannot create object");
					$counter="";
					foreach($xml->children() as $organization) {
						$counter+=1;
						echo '<div class="grid4column">
								<div class="portfolio-list">
								<span class="gallery-hover">
									<a href="video-player.php?id='.$organization['id'].'"><img src="'.$organization['hd_img'].'" width="202" height="152" alt="" /></a>
								</span>
								<h5><a href="video-player.php?id='.$organization['id'].'">'.$organization['title'].'</a></h5>
								</div>
							</div>';  
						if ($counter == 4){
							$counter="";
							echo '<div class="clearfix"></div>';
							
						}
					}
					
				?> 
				
				
				
				
				
			
			</div><!-- close .page-content -->
			
			
			
			
			<div class="clearfix"></div>
				
			
		</div><!-- close .content-container -->
	<div class="content-container-base-pagination"	></div>
	</div><!-- close #main -->
	
	
	
<?php include("footer.php"); ?>