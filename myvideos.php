<?php include("header.php");?>
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
						<li class="current-menu-item"><a href="myvideos.php">My Videos</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div><!-- close #navigation-narrow -->

		</div><!-- close #header-gradient -->
		
	</header>
	
	
	<div id="main" role="main">	
		
		 
		<div class="bread-crumbs"><span>You are here:</span>  My Videos</div>
		<div class="content-container">
			<div id="showcase" class="showcase">
			</div>
		</div>
		<div class="content-container-base-pagination" id="first-base-pagination"></div>
		<div class="content-container">	
			<div class="page-content">
				
				<h1 class="page-title">Watchlist</h1>
				
				<?php
				echo '<div class="myvideos">';
				if( !empty($_SESSION['LoggedIn']) && !empty($_SESSION['EmailAddress'])) {
					$counter="";	
					$watchlist_query=	mysql_query("SELECT VideoID FROM `watchlist` WHERE UserID = ".$_SESSION['UserID']);
					$watchlist=array();
					while ($row_data = mysql_fetch_assoc($watchlist_query)) {
						array_push($watchlist, array_shift(array_values($row_data)));
					}
					foreach(glob("{xml/*.xml}",GLOB_BRACE) as $filename) {
						$xml=simplexml_load_file($filename) or die("Error: Cannot create object");
						foreach($xml->children() as $item) {
							foreach($watchlist as $watchlist_item) {
								
								if ($item->contentId == $watchlist_item) {
									$mydate = strtotime($item->date);
									if ($mydate) {
										$mydate=date('F jS Y', $mydate);
									}
									$title=str_replace("'","\'",$item->title);
									$synopsis=str_replace("'","\'",$item->synopsis);
									$title=str_replace('"','&quot;',$title);
									$synopsis=str_replace('"','&quot;',$synopsis);
									$img_url=$item['hdImg'];
									echo '
									<div class="grid4column">
										<div class="portfolio-list">
										<div class="gallery-hover">
											<a href="#showcase" onclick="ajax_reload(\''.$title.'\',\''.$synopsis.'\',\''.$mydate.'\',\''.$img_url.'\'); show_pagination();"><img src="'.$img_url.'" width="202" height="114" alt="" /></a>
										</div>
										<h5><a href="#showcase" onclick="ajax_reload(\''.$title.'\',\''.$synopsis.'\',\''.$mydate.'\',\''.$img_url.'\'); show_pagination();">'.truncate($item->title,75).'</a></h5>
										<p>'.$mydate.'</p>
										</div><!-- close .portfolio-list -->
									</div>
									';
								}
							}
						}
					}
				echo '</div>';
				}
				else {
					echo '<p>Please log in to manage your videos.<p>'; 
				}
					
				?> 
				
				
				
				
				
				<br><br><br>
				<br><br><br>
				<br><br><br>
				<br><br><br>
				
				
				<h1 class="page-title">Purchased Videos</h1>
				<p class="page-description"></p>
				
				<?php
				echo '<div class="myvideos">';
				if( !empty($_SESSION['LoggedIn']) && !empty($_SESSION['EmailAddress'])) {
					$xml=simplexml_load_file("./xml/store.xml") or die("Error: Cannot create object");
					$counter="";
					foreach($xml->children() as $product) {
						foreach($_SESSION['Products'] as $product_id => $owned) {
							if ($product->contentId == $product_id && $owned) {
								$mydate = strtotime($product->date);
								if ($mydate) {
									$mydate=date('F jS Y', $mydate);
								}
								$title=str_replace("'","\'",$product->title);
								$synopsis=str_replace("'","\'",$product->synopsis);
								$title=str_replace('"','&quot;',$title);
								$synopsis=str_replace('"','&quot;',$synopsis);
								$img_url=$product['hdImg'];
								echo '
								<div class="grid4column">
									<div class="portfolio-list">
									<div class="gallery-hover">
										<a href="#showcase" onclick="ajax_reload(\''.$title.'\',\''.$synopsis.'\',\''.$mydate.'\',\''.$img_url.'\'); show_pagination();"><img src="'.$img_url.'" width="202" height="114" alt="" /></a>
									</div>
									<h5><a href="#showcase" onclick="ajax_reload(\''.$title.'\',\''.$synopsis.'\',\''.$mydate.'\',\''.$img_url.'\'); show_pagination();">'.truncate($product->title,75).'</a></h5>
									<p>'.$mydate.'</p>
									</div><!-- close .portfolio-list -->
								</div>
								';
							}
						}
					}
				
				echo '</div>';
				}
				else {
					echo '<p>Please log in to manage your videos.<p>'; 
				}
					
				?> 
				
				
			
			</div><!-- close .page-content -->
			
			
			
			
			<div class="clearfix"></div>
				
			
		</div><!-- close .content-container -->
	<div class="content-container-base-pagination"	></div>
	</div><!-- close #main -->
	
	

<script>
	$("#showcase").hide()
	$("#first-base-pagination").hide()
</script>	
<?php include("footer.php"); ?>