<?php include("header.php");
	$id= (int) $_GET["id"];
	$xml=simplexml_load_file("http://s3.amazonaws.com/roku-creation-channel/categories.xml") or die("Error: Cannot create object");
	$child=$xml->category[$id];
 ?>
</head>
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
						<li><a href="contact.php">Contact</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div><!-- close #navigation-narrow -->

		</div><!-- close #header-gradient -->
		
	</header>
	
	
	<div id="main" role="main">	
		
		<div class="bread-crumbs"></div>
		<div class="bread-crumbs"><span>You are here:</span>  <a href="index.php">Home</a> &rsaquo; <?php echo $xml->category[$id]['title'];?></div>
		
		<div class="content-container">
			<div id="showcase" class="showcase">
				<?php include("loading.php")?>
			</div>
		</div><!-- close .content-container -->
		<div class="content-container-base-pagination"></div><!-- close .content-container-base or .content-container-base-pagination -->
		
		<div class="content-container">
			
			<div class="tabs">
		            <?php
		            flush();
		            echo '<ul class="tabNavigation">';
		        	foreach($child->children() as $section){
		        		echo '<li><a href="#'.str_replace(' ','-',$section['title']).'">'.$section['title'].'</a></li>';
					}
					echo '<div class="clearfix"></div>';
					echo '</ul>';
					$first_item=true;
					foreach($child->children() as $section){
						echo '<div id="'.str_replace(' ','-',$section['title']).'">';
						$feed=simplexml_load_file($section['feed']);
						foreach($feed->children() as $item){
							$mydate = strtotime($item->date);
							if ($mydate) {
								$mydate=date('F jS Y', $mydate);
							}
							$title=str_replace("'","\'",$item->title);
							$synopsis=str_replace("'","\'",$item->synopsis);
							$contentid= $item->contentId;
							$title=str_replace('"','&quot;',$title);
							$synopsis=str_replace('"','&quot;',$synopsis);
							$img_url=$item['hdImg'];
							if ($first_item){
								echo '
									<script>
									ajax_reload(\''.$title.'\',\''.$synopsis.'\',\''.$mydate.'\',\''.$img_url.'\',\''.$contentid.'\')
									</script>
									';
								$first_item=false;
							}
							echo '
							<div class="grid4column">
								<div class="portfolio-list">
								<div class="gallery-hover">
									<a href="#showcase" onclick="ajax_reload(\''.$title.'\',\''.$synopsis.'\',\''.$mydate.'\',\''.$img_url.'\',\''.$contentid.'\')"><img src="'.$img_url.'" width="202" height="114" alt="" /></a>
								</div>
								<h5><a href="#showcase" onclick="ajax_reload(\''.$title.'\',\''.$synopsis.'\',\''.$mydate.'\',\''.$img_url.'\',\''.$contentid.'\')">'.truncate($item->title,75).'</a></h5>
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