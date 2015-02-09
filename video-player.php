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
 ?>
 <script>
 	function ajax_reload(title,synopsis,date,img_url){
 		title = title.replace(/'/g, "\'");
 		synopsis = synopsis.replace(/'/g, "\'");
 		$("#showcase").hide().html('<div class="showcase-slide"><div class="showcase-content"><div class="slider-left"><img src="'+img_url+'" width="560" height="315" </img></div><!-- close .slider-left --><div class="slider-right"><h2>'+title+'</h2><div class="post-details-slider">'+date+'</div><p>'+synopsis+'</p><div class="more-link-slider"><a href="" class="button">Download</a></div></div><!-- close .slider-right --></div></div>').fadeIn(800);
 		}
 </script>

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
				<div class="showcase-slide">
					<div class="showcase-content">
						<div class="full-width-slide">
							<style>
							#fountainG{
							position:relative;
							width:240px;
							height:29px}
							
							.fountainG{
							position:absolute;
							margin: 140px 310px;
							background-color:#000000;
							width:29px;
							height:29px;
							-moz-animation-name:bounce_fountainG;
							-moz-animation-duration:1.3s;
							-moz-animation-iteration-count:infinite;
							-moz-animation-direction:linear;
							-moz-transform:scale(.3);
							-moz-border-radius:19px;
							-webkit-animation-name:bounce_fountainG;
							-webkit-animation-duration:1.3s;
							-webkit-animation-iteration-count:infinite;
							-webkit-animation-direction:linear;
							-webkit-transform:scale(.3);
							-webkit-border-radius:19px;
							-ms-animation-name:bounce_fountainG;
							-ms-animation-duration:1.3s;
							-ms-animation-iteration-count:infinite;
							-ms-animation-direction:linear;
							-ms-transform:scale(.3);
							-ms-border-radius:19px;
							-o-animation-name:bounce_fountainG;
							-o-animation-duration:1.3s;
							-o-animation-iteration-count:infinite;
							-o-animation-direction:linear;
							-o-transform:scale(.3);
							-o-border-radius:19px;
							animation-name:bounce_fountainG;
							animation-duration:1.3s;
							animation-iteration-count:infinite;
							animation-direction:linear;
							transform:scale(.3);
							border-radius:19px;
							}
							
							#fountainG_1{
							left:0;
							-moz-animation-delay:0.52s;
							-webkit-animation-delay:0.52s;
							-ms-animation-delay:0.52s;
							-o-animation-delay:0.52s;
							animation-delay:0.52s;
							}
							
							#fountainG_2{
							left:30px;
							-moz-animation-delay:0.65s;
							-webkit-animation-delay:0.65s;
							-ms-animation-delay:0.65s;
							-o-animation-delay:0.65s;
							animation-delay:0.65s;
							}
							
							#fountainG_3{
							left:60px;
							-moz-animation-delay:0.78s;
							-webkit-animation-delay:0.78s;
							-ms-animation-delay:0.78s;
							-o-animation-delay:0.78s;
							animation-delay:0.78s;
							}
							
							#fountainG_4{
							left:90px;
							-moz-animation-delay:0.91s;
							-webkit-animation-delay:0.91s;
							-ms-animation-delay:0.91s;
							-o-animation-delay:0.91s;
							animation-delay:0.91s;
							}
							
							#fountainG_5{
							left:120px;
							-moz-animation-delay:1.04s;
							-webkit-animation-delay:1.04s;
							-ms-animation-delay:1.04s;
							-o-animation-delay:1.04s;
							animation-delay:1.04s;
							}
							
							#fountainG_6{
							left:150px;
							-moz-animation-delay:1.17s;
							-webkit-animation-delay:1.17s;
							-ms-animation-delay:1.17s;
							-o-animation-delay:1.17s;
							animation-delay:1.17s;
							}
							
							#fountainG_7{
							left:180px;
							-moz-animation-delay:1.3s;
							-webkit-animation-delay:1.3s;
							-ms-animation-delay:1.3s;
							-o-animation-delay:1.3s;
							animation-delay:1.3s;
							}
							
							#fountainG_8{
							left:210px;
							-moz-animation-delay:1.43s;
							-webkit-animation-delay:1.43s;
							-ms-animation-delay:1.43s;
							-o-animation-delay:1.43s;
							animation-delay:1.43s;
							}
							
							@-moz-keyframes bounce_fountainG{
							0%{
							-moz-transform:scale(1);
							background-color:#000000;
							}
							
							100%{
							-moz-transform:scale(.3);
							background-color:#FFFFFF;
							}
							
							}
							
							@-webkit-keyframes bounce_fountainG{
							0%{
							-webkit-transform:scale(1);
							background-color:#000000;
							}
							
							100%{
							-webkit-transform:scale(.3);
							background-color:#FFFFFF;
							}
							
							}
							
							@-ms-keyframes bounce_fountainG{
							0%{
							-ms-transform:scale(1);
							background-color:#000000;
							}
							
							100%{
							-ms-transform:scale(.3);
							background-color:#FFFFFF;
							}
							
							}
							
							@-o-keyframes bounce_fountainG{
							0%{
							-o-transform:scale(1);
							background-color:#000000;
							}
							
							100%{
							-o-transform:scale(.3);
							background-color:#FFFFFF;
							}
							
							}
							
							@keyframes bounce_fountainG{
							0%{
							transform:scale(1);
							background-color:#000000;
							}
							
							100%{
							transform:scale(.3);
							background-color:#FFFFFF;
							}
							
							}
							
							</style>
							<div id="fountainG">
								<div id="fountainG_1" class="fountainG">
								</div>
								<div id="fountainG_2" class="fountainG">
								</div>
								<div id="fountainG_3" class="fountainG">
								</div>
								<div id="fountainG_4" class="fountainG">
								</div>
								<div id="fountainG_5" class="fountainG">
								</div>
								<div id="fountainG_6" class="fountainG">
								</div>
								<div id="fountainG_7" class="fountainG">
								</div>
								<div id="fountainG_8" class="fountainG">
								</div>
							</div> 
						</div><!-- close .full-width-slide -->
					</div>
				</div>
		
				
				
			
			
			
		</div><!-- close .content-container --></div>
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
							$title=str_replace('"','&quot;',$title);
							$synopsis=str_replace('"','&quot;',$synopsis);
							$img_url=$item['hdImg'];
							if ($first_item){
								echo '
									<script>
									ajax_reload(\''.$title.'\',\''.$synopsis.'\',\''.$mydate.'\',\''.$img_url.'\')
									</script>
									';
								$first_item=false;
							}
							echo '
							<div class="grid4column">
								<div class="portfolio-list">
								<div class="gallery-hover">
									<a href="#showcase" onclick="ajax_reload(\''.$title.'\',\''.$synopsis.'\',\''.$mydate.'\',\''.$img_url.'\')"><img src="'.$img_url.'" width="202" height="114" alt="" /></a>
								</div>
								<h5><a href="#showcase" onclick="ajax_reload(\''.$title.'\',\''.$synopsis.'\',\''.$mydate.'\',\''.$img_url.'\')">'.truncate($item->title,75).'</a></h5>
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