<?php include("header.php");
	$search= strtolower($_GET["search"]);
	
	$xml=simplexml_load_file("http://s3.amazonaws.com/roku-creation-channel/categories.xml") or die("Error: Cannot create object");
	$xml_urls=array();
 ?>
 <script>
	function add_remove_watchlist(id) {
		$.ajax({ url: 'add_remove_watchlist.php',
         data: {video_id: id},
         type: 'post'
		});
		if ($('#watchlist_button:contains("Add To Watchlist")').length > 0){
    		$("#watchlist_button").text("Remove From Watchlist");
    		}
    	else {
    		$("#watchlist_button").text("Add To Watchlist");
    		}
	}
	
	function ajax_reload(title,synopsis,date,img_url,contentid){
		$.ajax({ url: 'check_watchlist.php',
		 async: false,
         data: {video_id: contentid},
         type: 'post',
         success: function(data) {
                    in_watchlist = data;
                  }
		});
		title = title.replace(/'/g, "\'");
		synopsis = synopsis.replace(/'/g, "\'");
		if (in_watchlist == false) {
			$("#showcase").hide().html('<div class="showcase-slide"><div class="showcase-content"><div class="slider-left"><img src="'+img_url+'" width="560" height="315" </img></div><!-- close .slider-left --><div class="slider-right"><h2>'+title+'</h2><div class="post-details-slider">'+date+'</div><p>'+synopsis+'</p><div class="more-link-slider"><a class="button">Download</a><a onclick="add_remove_watchlist('+contentid+')" class="button" id="watchlist_button">Add To Watchlist</a></div></div><!-- close .slider-right --></div></div>').fadeIn(800);
		}
		else {
			$("#showcase").hide().html('<div class="showcase-slide"><div class="showcase-content"><div class="slider-left"><img src="'+img_url+'" width="560" height="315" </img></div><!-- close .slider-left --><div class="slider-right"><h2>'+title+'</h2><div class="post-details-slider">'+date+'</div><p>'+synopsis+'</p><div class="more-link-slider"><a class="button">Download</a><a onclick="add_remove_watchlist('+contentid+')" class="button" id="watchlist_button">Remove From Watchlist</a></div></div><!-- close .slider-right --></div></div>').fadeIn(800);
		}
	}
</script>
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
		<div class="bread-crumbs"><span>You are here:</span>  <a href="index.php">Home</a> &rsaquo; Search: <?php echo $_GET["search"]?></div>
		
		<div class="content-container">
			<div id="showcase" class="showcase">
				<p style="text-align:center;font-size:30px;padding-top:10px">No Results :(</p>
			</div><!-- close .content-container -->
		</div>
		<div class="content-container-base-pagination"></div><!-- close .content-container-base or .content-container-base-pagination -->
		
		<div class="content-container">
			
			<div class="tabs">
		            <?php
					$first_item=true;
					echo '<div id="results">';
					foreach(glob("{xml/*.xml}",GLOB_BRACE) as $filename) {
   						$xml_category = simplexml_load_file($filename);
   						$results = $xml_category->xpath('//item[contains(translate(./title, "ABCDEFGHJIKLMNOPQRSTUVWXYZ", "abcdefghjiklmnopqrstuvwxyz"),  
 normalize-space(translate("'.$search.'", "ABCDEFGHJIKLMNOPQRSTUVWXYZ", "bcdefghjiklmnopqrstuvwxyz"))) or contains(
 translate(./synopsis, "ABCDEFGHJIKLMNOPQRSTUVWXYZ", "abcdefghjiklmnopqrstuvwxyz"),  
 normalize-space(translate("'.$search.'", "ABCDEFGHJIKLMNOPQRSTUVWXYZ", "bcdefghjiklmnopqrstuvwxyz")))]');
					foreach($results as $item) {
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
						}
		        	?>
		    </div><!-- close .tabs -->
			
			
			<div class="clearfix"></div>
		</div><!-- close .content-container --></div>
		<div class="content-container-base-pagination">
			<div class="left-pagination"><a href="#"></a></div>
			<div class="right-pagination"></div>
			<div class="center-pagination"></div>
			<div class="clearfix"></div>
		</div><!-- close .content-container-base or .content-container-base-pagination -->
		
	</div><!-- close #main -->
	

<?php include("footer.php"); ?>